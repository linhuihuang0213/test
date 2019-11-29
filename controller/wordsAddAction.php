<?php
/**
 * 发帖后台模板
 * mrlee编程
 */

//1.加载公共函数库
include 'model/function.php';

//2.设置模板名称
$tplName = 'words_tpl';

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
	$user_name = $_POST['user_name'];
	if(!$user_name){
		echo '<script> alert(\'留言姓名不能为空！~~\');javascript:history.back(-1);</script>';
		exit;
	}

	$user_email = $_POST['user_email'];
	if(!$user_email){
		echo '<script> alert(\'邮箱不能为空！~~\');javascript:history.back(-1);</script>';
		exit;
	}

	$user_content = $_POST['user_content'];
	$user_content = htmlspecialchars($user_content);
	if(!$user_content){
		echo '<script> alert(\'内容不能为空~~\');javascript:history.back(-1);</script>';
		exit;
	}
	// 获取当前时间戳
	$words_time = time();

	// 创建mysql语句
	$sql = "INSERT INTO {$wordsTable} VALUES (null,'{$userList['uid']}','{$user_name}','{$user_email}','{$user_content}','{$words_time}',1)";
	// 添加数据
	$id  = insert($db,$sql);
	if($id){
		echo '<script> alert(\'留言成功~~\');location.href=\'index.php?a=wordsList\';</script>';
		exit;
	}else{
		echo '<script> alert(\'留言失败，请重新尝试~~\');javascript:history.back(-1);</script>';
		exit;
	}
}