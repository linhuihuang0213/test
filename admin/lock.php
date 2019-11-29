<?php 
if(!session_id()) 
session_start();
$path=$_SERVER['PHP_SELF'];
$arr=explode('/',$path);
$root='/'.$arr[1];
if(!$_SESSION['admin_userid']){
	echo "<script>location='login.php'</script>";
}
?>