<?php
/**
 * 注册模板
 *mrlee编程
 */

//1.加载公共函数库
include 'model/function.php';

//2.设置模板名称
$tplName = 'reg_tpl';
//3.如果登录，存储用户信息。跳转到上一页面
if($_POST){
	$KeyImg=strtolower($_POST['KeyImg']);
	$vcode=strtolower($_SESSION['vcode']);
	if($KeyImg!=$vcode){
	// 判断账号不能为空
	$account = $_POST['account'];
	if(!$account){
		echo '<script> alert(\'账号不能为空~~\');javascript:history.back(-1);</script>';
		exit;
	}
	// 判断账号是否重复
	$userList = find($userTable,$db,'account',$account);
	if($userList){
		echo '<script> alert(\'账号已存在~~\');javascript:history.back(-1);</script>';
		exit;
	}
	// 判断昵称不能为空
	$nickname = $_POST['nickname'];
	if(!$nickname){
		echo '<script> alert(\'昵称不能为空~~\');javascript:history.back(-1);</script>';
		exit;
	}
	// 判断邮箱不能为空
	$email = $_POST['email'];
	if(!$email){
		echo '<script> alert(\'邮箱不能为空~~\');javascript:history.back(-1);</script>';
		exit;
	}
	// 判断密码不能为空
	$psword = $_POST['psword'];
	$psword1 = $_POST['psword1'];
	if($psword!=$psword1){
		echo '<script> alert(\'两次密码不一致~~\');javascript:history.back(-1);</script>';
		exit;
	}else{
		$psword = md5($psword);	//对用户注册密码加密
	}
	// 获取当前时间戳
	$add_time = time();
	// 创建mysql语句
	$sql = "INSERT INTO {$userTable} VALUES (null,'{$nickname}','static/my_1.jpg','{$account}','{$email}','{$psword}','{$add_time}',1,1,0,0,0)";
	// 添加数据
	$id  = insert($db,$sql);
	// 判断数据是否增加成功
	if($id){
		// 获取用户信息
		$userList = find($userTable,$db,'uid',$id);
		session_start();
		$_SESSION['user']	=	$userList;

		echo '<script> alert(\'注册成功~~\');location.href=\'index.php?a=login\';</script>';
	}else{
		echo '<script> alert(\'注册失败，请重新尝试~~\');javascript:history.back(-1);</script>';
	}
	}else{
		echo '<script> alert(\'验证码错误~~\');javascript:history.back(-1);</script>';
		exit;
	}
}