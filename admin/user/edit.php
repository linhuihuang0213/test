<?php 
include '../lock.php';
include '../config.php';

$uid=$_GET['id'];
$sql="select * from forum_user where uid={$uid}";
$rst=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rst);
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
		<form action="update.php" method='post'>
			<p>昵称:</p>
			<p><input type="text" name='nickname' value='<?php echo $row['nickname']?>'></p>
			<p>账号:</p>
			<p><input type="text" name='account' value='<?php echo $row['account']?>'></p>
			<p>邮箱:</p>
			<p><input type="text" name='email' value='<?php echo $row['email']?>'></p>
			<p>积分:</p>
			<p><input type="text" name='jifen' value='<?php echo $row['jifen']?>'></p>
			<p>是否管理:</p>
			<p><input type="text" name='is_admin' value='<?php echo $row['is_admin']?>'>(1为管理)</p>
			<p>密码:</p>
			<p><input type="password" name='psword'></p>

			<input type="hidden" name="uid" value='<?php echo $row['uid']?>'>	

			<p><input type="submit" value="修改"></p>
		</form>		
	</div>
	
</body>
</html>