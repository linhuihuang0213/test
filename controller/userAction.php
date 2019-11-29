<?php
/**
 * 个人中心模板
 *mrlee编程
 */

//1.加载公共函数库
include 'model/function.php';

//2.设置模板名称
$tplName = 'user_tpl';

//3.如果登录，存储用户信息。未登录，跳转到登录页面
session_start();
if(isset($_SESSION['user'])){
	$userList	=	$_SESSION['user'];
}else{
	echo '<script> alert(\'未登录，请先登录！~~\');location.href=\'index.php?a=login\';</script>';
	exit;
}
//4.请求用户发帖列表
$uid=$userList['uid'];
$userList = find($userTable,$db,'uid',$uid);

$page = isset($_GET['page']) ? (int)($_GET['page']):1;
$bbsOrder = 'ORDER BY `add_time` DESC ';
//获取帖子分页数据
if($userList['is_admin'] == 1){
	$bbsWhere	=	'';
}else{
	$bbsWhere	=	'WHERE uid = '.$userList['uid'];
}
$limit = ($page-1)*$num;			//第几页  0*10 = 0
$limit = $limit.','.$num;			//组装limit 0,10
$list  = select($bbsTable,$db,$bbsWhere,$bbsOrder,$limit);
if($list){
	foreach($list as $k=>$v){
		$comWhere	=	'WHERE bbs_id = '.$v['bbs_id'];
		$count 		=	count_number($comTable,$db,$comWhere);
		$bbsList[$k]	=	array(
			'bbs_id'	=>	$v['bbs_id'],
			'bbs_title'	=>	$v['bbs_title'],
			'browse'	=>	$v['browse'],
			'is_hot'	=>	$v['is_hot'],
			'add_time'	=>	date('Y-m-d H:i',$v['add_time']),
			'url'		=>	$url.'?a=details&id='.$v['bbs_id'],
			'count'		=>	$count,//统计浏览
			'delurl'	=>	$url.'?a=oper&o=del&id='.$v['bbs_id'],//删除
			'hoturl'	=>	$url.'?a=oper&o=hot&id='.$v['bbs_id'],//修改
			'nhoturl'	=>	$url.'?a=oper&o=nhot&id='.$v['bbs_id'],	//设置热门
			'editurl'	=>	$url.'?a=edit&id='.$v['bbs_id'],
			'nickname'	=>	find_one($userTable,$db,' WHERE uid='.$v['uid'],'nickname'),//管理员看帖子时获取所有用户的昵称
		);
	}
}

//5.组装分页html
$count_number=	count_number($bbsTable,$db,$bbsWhere);
//ceil加一比如11条数据显示两页
$number 	 =	ceil($count_number/$num);
$bbsListPage =  '';
for($p=1;$p<=$number;$p++){
	if($p == $page){
		$bbsListPage .= '<li class="active"><a href="';
	}else{
		$bbsListPage .= '<li><a href="';
	}
	$bbsListPage .= 'index.php?a=user&page='.$p;
	$bbsListPage .= '">';
	$bbsListPage .= $p;
	$bbsListPage .= '</a></li>';
}