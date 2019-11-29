<?php 
include '../config.php';
include '../lock.php';
$comment_id=$_POST['comment_id'];
$content=$_POST['content'];
$add_time=$_POST['add_time'];

$sql="update forum_comment set content='{$content}',add_time='{$add_time}' where comment_id={$comment_id}";

if(mysqli_query($conn,$sql)){
	echo '<script>location="index.php"</script>';
}
?>