<?php
/**
 * 首页模板
 *mrlee编程
 */
//1.加载公共函数库
include 'model/function.php';
//5.设置模板名称
$tplName = 'words_tpl';
//2.获取当前帖子的分页数据
if($_POST){
	$wordsOrder = 'ORDER BY `add_time` DESC ';  //设置帖子最新排序
	//% %  是防止用户输入的是英文系统报错   like是模糊查询
	$wordsWhere =	'WHERE words_statis = 1';	//搜索条件
	$limit    = 0; //组装limit
}
$list  = select($wordsTable,$db,$wordsWhere,$wordsOrder,$limit);	//搜索帖子数据
if($list){
	foreach($list as $k=>$v){
		$bbsList[$k]	=	array(
			'words_id'	=>	$v['words_id'],
			'uid'		=>	$v['uid'],
			'user_name'	=>	$v['user_name'],
			'user_content'	=>	$v['user_content'],
			'nickname'	=>	find_one($userTable,$db,'WHERE uid='.$v['uid'],'nickname'),
			'words_time'	=>	date('Y-m-d H:i',$v['words_time'])
		);
	}
}
//3.组装分页html
if(!$_POST){
	$count_number	=	count_number($bbsTable,$db,$wordsWhere);
	$number 	=	ceil($count_number/$num);
	$bbsListPage = '';
	for($p=1;$p<=$number;$p++){
		if($p == $page){
			$bbsListPage .= '<li class="active"><a href="';
		}else{
			$bbsListPage .= '<li><a href=" ';
		}
		$bbsListPage .= 'index.php?a=list&page='.$p.'&type='.$bbsType;
		$bbsListPage .= '">';
		$bbsListPage .= $p;
		$bbsListPage .= '</a></li>';
	}
}

//6.如果登录了，获取用户信息
session_start();
if(isset($_SESSION['user'])){
	$userList	=	$_SESSION['user'];
}