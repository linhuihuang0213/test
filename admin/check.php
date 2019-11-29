<?php 
session_start();

//管理员审核
include 'config.php';

$username=$_POST['username'];
$password=$_POST['password'];

$password = md5($password);//从数据库获取数据，然后把数据转换成md5,用于登录
$sql="select * from forum_user where account='{$username}' and psword='{$password}' and is_admin=1";

$rst=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($rst);

if($row){
	$_SESSION['admin_username']=$username;
	$_SESSION['admin_userid']=$row['uid'];
	echo "<script>location='index.php'</script>";
}else{
	echo "<script>alert('用户名或密码有误,请重新输入!')</script>";
	echo "<script>location='login.php'</script>";
}
?>