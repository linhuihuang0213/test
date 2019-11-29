<?php 
include '../lock.php';
include '../config.php';

$nickname=$_POST['nickname'];
$account=$_POST['account'];
$email=$_POST['email'];
$jifen=$_POST['jifen'];
$psword=$_POST['psword'];
$is_admin=$_POST['is_admin'];
$uid=$_POST['uid'];
$psword = md5($psword);	//对用户注册密码加密
$sql="update forum_user set nickname='{$nickname}',account='{$account}',email='{$email}',jifen='{$jifen}',psword='{$psword}',is_admin='{$is_admin}' where uid={$uid}";

if(mysqli_query($conn,$sql)){
	echo '<script>location="index.php"</script>';
}
?>