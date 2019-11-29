<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人博客后台登录</title>
	<link rel="stylesheet" type="text/css" href="public/css/login.css">
</head>
<body class="main">
<form main="reg" action="check.php" method="post">
	<div class="loginFrm">
		<div class="loginBiao">
			<div class="loginHeader">
				<h2>后台管理登录</h2>
			</div>
			<div class="loginInput">
				<input type="text" name="username" placeholder="请输入用户名" required class="loginInput1"/>
			</div>
			<div class="loginInput">
				<input type="password" name="password" placeholder="请输入密码" required class="loginInput1"/>
			</div>
			<div class="loginBtu">
				<input type="submit" value="登录" class="loginBtu1">
			</div>
		</div>
	</div>
</form>
</body>
</html>