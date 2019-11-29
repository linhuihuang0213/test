<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="keywords" content="李安华的个人网站"/><!--设置网页关键字 -->
	<meta name="description" content="个人网站"/><!--设置网页描述-->
	<meta name="author" content="李安华"/><!--设置网页作者 -->
	<title><?php echo SITE_SUFFIX; ?></title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <script type="text/jscript" src="public/js/jquery-3.2.1.min.js"></script>
  <script type="text/jscript" src="public/js/main.js"></script>
  <link rel="shortcut icon" href="public/images/logo.ico" type="image/x-icon">

  <!--一键回顶部-->
  <script src="public/js/jquery-1.10.2.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#go_top").hide();
      $(function () {
        //检测屏幕高度
        var height=$(window).height();
        //scroll() 方法为滚动事件
        $(window).scroll(function(){
          if ($(window).scrollTop()>height){
            $("#go_top").fadeIn(500);
          }else{
            $("#go_top").fadeOut(500);
            }
        });
        $("#go_top").click(function(){
          $('body,html').animate({scrollTop:0},100);
          return false;
        });
      });
    });
  </script>
</head>
<body>
<div class="navTop">
  <div class="navTopLeft">
    <span>mr.lee个人博客 - 会唱跳rap的篮球少年！</span>
  </div>
  <div class="navTopRight">
    <span><a href="">[返回首页]</a></span>
    <span><a href="">[点击收藏]</a></span>
    <span><a href="index.php?a=user">[个人主页]</a></span>
      <?php if(isset($userList)){ ?>
          <span><a href="index.php?a=logout">[退出]</a></span>
      <?php }else{ ?>
        <span><a href="index.php?a=login">[登录]</a></span>
      <?php } ?>
  </div>
</div>
<header>
  <nav class="topnav" id="topnav">
  <div class="topNavInput">
    <form class="navbar-search" action="index.php?a=search" id="global_search_form" method="post">
      <input type="text" class='topNavSearch' maxlength='18' placeholder="输入关键词搜索相关内容" autocomplete="off" name="q" id="aw-search-query">
      <input type="image" src='public/images/sub.gif' class='topNavSub' align='top' id="global_search_btns" onclick="$('#global_search_form').submit();">
    </form>
  </div>
    <a href="index.php">
      <span>首页</span>
      <span class="en">Honme</span>
    </a>
    <a href="index.php?a=about">
      <span>关于我</span>
      <span class="en">About</span>
    </a>
    <a href="index.php?a=riji">
      <span>我的日记</span>
      <span class="en">Diary</span>
    </a>
    <a href="index.php?a=shuo">
      <span>我的内心话</span>
      <span class="en">Seo</span>
    </a>
    <a href="index.php?a=wordsList">
      <span>留言版</span>
      <span class="en">Gustbook</span>
    </a>
  </nav>
</header>