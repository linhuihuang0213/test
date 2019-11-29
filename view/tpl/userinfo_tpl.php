<div id="content">
    <div class="clear"></div>
	<div class="homaMain">
		<div class="userTop">
			<img src="public/images/home_shezhi.png" alt="">
			<span>用户基本信息编辑</span>
		</div>
		<form action="index.php?a=userinfo" method="post">
		<div class="userContent">
			<div class="userContent_title">
				<h3>基本信息</h3>
			</div>
			<div class="userContent_text">
				<p>
					<span class="userContent_text1">博客账号：</span>
					<span><?php echo $userList['account'] ?></span>
				</p>
				<p>
					<span class="userContent_text1">上传头像：</span>
					<span><input class="form-control" name="head" type="file" accept="image/jpeg,image/gif,image/png"></span>
				</p>
				<p>
					<span class="userContent_text1">修改昵称：</span>
					<span><input type="text" name="nickname" value="<?php echo $userList['nickname'] ?>"></span>
				</p>
				<p>
					<span class="userContent_text1">修改邮箱：</span>
					<span><input type="text" name="email" value="<?php echo $userList['email'] ?>"></span>
				</p>
				<p>
					<span class="userContent_text1">修改密码：</span>
					<span><input type="password" name="psword"></span>
				</p>
			</div>
		</div>
        <div class="conFaTieBut">
          <input type="submit" value="确认修改">
        </div>
		</form>
	</div>

</div>