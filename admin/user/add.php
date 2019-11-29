<?php 
include '../lock.php';
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
		<form action="insert.php" method='post'>
			<p>昵称:</p>
			<p><input type="text" name='nickname' ></p>
			<p>账号:</p>
			<p><input type="text" name='account' ></p>
			<p>邮箱:</p>
			<p><input type="text" name='email' ></p>
			<p>积分:</p>
			<p><input type="text" name='jifen'></p>
			<p>是否管理:</p>
			<p><input type="text" name='is_admin' </p>
			<p>密码:</p>
			<p><input type="password" name='psword'></p>
			<p><input type="submit" value="添加"></p>
		</form>		
	</div>
	
</body>
</html>