<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人博客用户注册</title>
	<link rel="stylesheet" href="public/css/login.css" type="text/css">
</head>
<body>
<div class="loginCon">
	<div class="loginLogin"></div>
	<div class="loginBox">
		<div class="loginForm">
			<div class="loginTitle">
				个人博客用户注册
			</div>
			<form action="index.php?a=reg" method="post">
				<div class="loginUser">
					<input name="nickname" type="text" placeholder="请输入昵称">
				</div>
				<div class="loginUser">
					<input name="account" type="text" placeholder="请输入账号">
				</div>
				<div class="loginUser">
					<input name="email" type="text" placeholder="请输入注册邮箱" pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$">
				</div>
				<div class="loginUser">
					<input name="psword" type="password" placeholder="请输入密码">
				</div>
				<div class="loginUser">
					<input name="psword1" type="password" placeholder="重新输入密码">
				</div>
				<div class="loginYan">
					<div class="loginYanLeft">
						<input name="KeyImg" type="text" placeholder="请输入验证码">
					</div>
				</div>
				<div class="loginYanRight">
						<img src="model/yzm.php" onclick="this.src='model/yzm.php?rand='+Math.random()"> 
					</div>
				</div>
				<div class="loginSubmit">
					<input type="submit" value="登录">
				</div>
				<div class="loginWu">
					<span>注册好了？</span><a href="index.php?a=login">搞快点登陆</a>
				</div>
				<div class="loginQiTa"></div>
			</form>
		</div>
	</div>
</div>
</body>
</html>