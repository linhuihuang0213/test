<?php 
include '../lock.php';
include '../config.php';

$uid=$_GET['id'];
$sql="delete from forum_user where uid={$uid}";

if(mysqli_query($conn,$sql)){
	echo '<script>location="index.php"</script>';
}
?>