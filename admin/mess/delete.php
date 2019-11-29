<?php 
include '../config.php';
include '../lock.php';
$comment_id=$_GET['id'];
$sql="delete from forum_comment where comment_id='{$comment_id}'";

if(mysqli_query($conn,$sql)){
	echo '<script>location="index.php"</script>';
}
?>