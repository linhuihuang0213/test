<?php 
include '../lock.php';
include '../config.php';

$bbs_id=$_GET['id'];
$sql="delete from forum_bbs where bbs_id={$bbs_id}";

if(mysqli_query($conn,$sql)){
	echo '<script>location="index.php"</script>';
}
?>