<?php 
session_start();
include 'config.php';
$uid=$_POST['uid'];
$account=$_POST['account'];
$psword=$_POST['psword'];
$psword = md5($psword);	//对用户注册密码加密
$sql="update forum_user set account='{$account}',psword='{$psword}' where uid='{$uid}'";

if(mysqli_query($conn,$sql)){
	$_SESSION=array();
	session_destroy();
	setcookie('PHPSESSID','',time()-3600,'/');
	echo '<script>top.location="login.php"</script>';
}
?>