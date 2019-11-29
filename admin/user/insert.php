<?php 
include '../lock.php';
include '../config.php';

$nickname=$_POST['nickname'];
$account=$_POST['account'];
$email=$_POST['email'];
$jifen=$_POST['jifen'];
$psword=$_POST['psword'];
$is_admin=$_POST['is_admin'];
$psword = md5($psword);	//对用户注册密码加密
$sql="insert into forum_user(nickname,account,email,jifen,psword,is_admin) values('{$nickname}','{$account}','{$email}','{$jifen}','{$psword}','{$is_admin}')";

if(mysqli_query($conn,$sql)){
	echo '<script>location="index.php"</script>';
}
?>
