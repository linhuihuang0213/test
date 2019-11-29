<?php
	session_start();
	include 'config.php';
	$uid=$_SESSION['admin_userid'];
	$sql="SELECT * FROM forum_user where uid={$uid}";
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
		<form action="adminupdate.php" method='post'>
			<p>用户名:</p>
			<p><input type="text" name='account' value='<?php echo $row['account']?>'></p>

			<p>密码:</p>
			<p><input type="password" name='psword'></p>
			<input type="hidden" name="uid" value='<?php echo $row['uid']?>'>	
			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>