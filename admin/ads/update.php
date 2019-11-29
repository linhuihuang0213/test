<?php 
include '../config.php';
include '../lock.php';

$bbs_title=$_POST['bbs_title'];
$status=$_POST['status'];
$browse=$_POST['browse'];
$agree=$_POST['agree'];
$bbs_id=$_POST['bbs_id'];

$sql="update forum_bbs set bbs_title='{$bbs_title}',status='{$status}',browse='{$browse}',agree='{$agree}'  where bbs_id={$bbs_id}";

if(mysqli_query($conn,$sql)){
	echo '<script>location="index.php"</script>';
}
?>