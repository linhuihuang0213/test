<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>left</title>
	<style>
		*{
			font-family: 微软雅黑;
			text-decoration:none;
		}
		h4{
			cursor: pointer;
			background: #272822;
			border-radius:5px;
			text-align: center;
			color:#fff;
		}

		h4:hover{
			color:#aff;
		}

		div{
			display: none;
		}

		p{
			padding-left:15px;
			background: #E4393C;
			border-radius:5px;
		}

		p a{
			color:#fff;
		}
	</style>
	<script src='public/js/jquery.js'></script>
</head>
<body>
	<h4>用户管理</h4>
	<div>
		<p><a href='user/index.php' target='right'>|-查看用户</a></p>
		<p><a href='user/add.php' target='right'>|-添加用户</a></p>
	</div>
	
	<h4>文章管理</h4>
	<div>
		<p><a href='ads/index.php' target='right'>|-查看文章</a></p>
	</div>
	<h4>评论管理</h4>
	<div>
		<p><a href='mess/index.php' target='right'>|-查看评论</a></p>
	</div>
	<h4>系统管理</h4>
	<div>
		<p><a href="adminpass.php" target='right'>|-修改口令</a></p>
		<p><a href="logout.php" target='_top' onclick="return confirm('您确认退出系统了吗?')">|-退出系统</a></p>
		<p><a href="../index.php" target='_blank'>|-网站首页</a></p>
	</div>
</body>
<script>
$('h4').click(function(){
	$(this).next().toggle();
	$('div').not($(this).next()).hide();
});
</script>
</html>