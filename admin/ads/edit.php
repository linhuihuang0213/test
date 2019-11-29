<?php 
include '../config.php';
include '../lock.php';

$bbs_id=$_GET['id'];
$sql="select * from forum_bbs where bbs_id={$bbs_id}";
$rst=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rst);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<form action="update.php" method='post'>
			<p>帖子标题:</p>
			<p><input type="text" name='bbs_title' value='<?php echo $row['bbs_title']?>'></p>
			<p>审核:</p>
			<p><input type="text" name='status' value='<?php echo $row['status']?>'></p>
			<p>总浏览数:</p>
			<p><input type="text" name='browse' value='<?php echo $row['browse']?>'></p>
			<p>点赞数:</p>
			<p><input type="text" name='agree' value='<?php echo $row['agree']?>'></p>
			<input type="hidden" name="bbs_id" value='<?php echo $row['bbs_id']?>'>	
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>