<?php 
include '../config.php';
include '../lock.php';
$comment_id=$_GET['id'];
$sql="select * from forum_comment where comment_id={$comment_id}";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
		<form action="update.php" method='post' enctype='multipart/form-data'>
			<p>留言内容:</p>
			<p><input type="text" name='content' value='<?php echo $row['content']?>'></p>
			<p>留言时间:</p>
			<p><input type="text" name='add_time' value='<?php echo date('Y-m-d H:i',$row['add_time']);?>'></p>
			<input type="hidden" name="comment_id" value='<?php echo $row['comment_id']?>'>	
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>