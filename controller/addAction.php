<?php
/**
 * 发帖后台模板
 * mrlee编程
 */

//1.加载公共函数库
include 'model/function.php';

//2.设置模板名称
$tplName = 'add_tpl';

//3.如果登录了，获取用户信息
session_start();
if(isset($_SESSION['user'])){
	$userList	=	$_SESSION['user'];//获取用户
}else{
	echo '<script> alert(\'未登录，请先登录！~~\');location.href=\'index.php?a=login\';</script>';
	exit;
}

//4.发帖保存
if($_POST){
	$bbs_fen = $_POST['bbs_fen'];
	if(!$bbs_fen){
		echo '<script> alert(\'帖子分类不能为空~~\');javascript:history.back(-1);</script>';
		exit;
	}
	$bbs_title = $_POST['bbs_title'];
	$bbs_title = htmlspecialchars($bbs_title);
	if(!$bbs_title){
		echo '<script> alert(\'标题不能为空~~\');javascript:history.back(-1);</script>';
		exit;
	}
	$bbs_content = $_POST['bbs_content'];
	$bbs_content = htmlspecialchars($bbs_content);
	if(!$bbs_content){
		echo '<script> alert(\'内容不能为空~~\');javascript:history.back(-1);</script>';
		exit;
	}

	// 判断帖子内容是否重复，用标题不能相同
	$bbsList = find($bbsTable,$db,'bbs_title',$bbs_title);
	if($bbsList['bbs_title']==$bbs_title){
		echo '<script> alert(\'该帖子已经存在,请重新输入!~~\');javascript:history.back(-1);</script>';
		exit;
	}

	// 获取当前时间戳
	$add_time = time();

	// 创建mysql语句
	$sql = "INSERT INTO {$bbsTable} VALUES (null,'{$userList['uid']}','{$bbs_title}','{$bbs_fen}',1,'{$bbs_content}','{$add_time}',1,0,0,0)";
	// 添加数据
	$id  = insert($db,$sql);
	if($id){
		echo '<script> alert(\'发帖成功,威望+5~~\');location.href=\'index.php\';</script>';
		//用户表中的威望加5
		$value = 'prestige=prestige+5';
		$where = $userList['uid'];
		$save=save($userTable,$db,$value,$where);
		exit;
	}else{
		echo '<script> alert(\'发帖失败，请重新尝试~~\');javascript:history.back(-1);</script>';
		exit;
	}
}