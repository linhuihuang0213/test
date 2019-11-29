<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人博客用户登录</title>
	<link rel="stylesheet" href="public/css/login.css" type="text/css">
</head>
<body>
<div class="loginCon">
	<div class="loginLogin"></div>
	<div class="loginBox">
		<div class="loginForm">
			<div class="loginTitle">
				个人博客用户登录
			</div>
			<form action="index.php?a=login" method="post">
				<div class="loginUser">
					<input name="account" type="text" placeholder="手机号/邮箱">
				</div>
				<div class="loginUser">
					<input name="psword" type="password" placeholder="请输入密码">
				</div>
				<div class="loginWangForm">
					<div class="left loginWangLeft">
						<label><input name="" type="checkbox"> 记住密码</label>
					</div>
					<div class="right loginWangLeft Right">
						<a href="">忘记密码？</a>
					</div>
				</div>
				<div class="loginSubmit">
					<input type="submit" value="登录">
				</div>
				<div class="loginWu">
					<span>现在都没有博客账号？</span><a href="index.php?a=reg">赶快搞一个</a>
				</div>
				<div class="loginQiTa"></div>
			</form>
		</div>
	</div>
</div>
</body>
</html>