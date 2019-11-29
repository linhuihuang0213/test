<div class="banner">
    <div id="banner1">
    <div class="pic">
      <a href="#" style="display:block"><img alt="" src="static/1.jpg" /></a>
      <a href="#"><img alt="" src="static/2.jpg" /></a>
      <a href="#"><img alt="" src="static/3.jpg" /></a>
    </div>
    <div class="btn">
      <ul>
        <li class="one">1</li>
        <li>2</li>
        <li>3</li>
      </ul>
    </div>
  </div>
  <section class="box">
    <ul class="texts">
      <p class="p1">mr.lee博客</p>
      <p class="p2">让作业不再困难</p>
      <p class="p3">蔡徐坤</p>
    </ul>
  </section>
</div>
<!--end banner-->
  
  <!--留言开始-->
    <div id="words">
    <div class="weizi">
      <div class="wz_text">当前位置：
        <a href="index.html">首页</a>><h1>留言板</h1>
      </div>
    </div>
      <form action="index.php?a=wordsAdd" method="post">
        <span>留言人:</span>
        <input type="text" name="user_name"><span class="wordsXin">*</span>
        <span>邮箱:</span>
        <input type="text" name="user_email"><br/>
        <span class="wordsText">内容:</span>
        <textarea name="user_content" cols="80" rows="5"></textarea><br/>
        <input type="submit" value="点击留言">
      </form>
      <div class="wordsWen">
        <header>
          <img src="public/images/icon.gif" alt="博友评论"  />
        </header>
        <hr color="#CCC"/>
        <?php if($bbsList){ foreach($bbsList as $v){  ?>
        <div class="comment">
          <div class="comment_Left">
            <img src="<?php echo !empty($userList['head'])?$userList['head']:'static/my_1.jpg'; ?>" alt="用户头像" align="left" hspace="10" />
          </div>
          <div class="cWen">
          <p>
            <span>姓名：<?php echo $v['nickname']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
            留言时间：<?php echo $v['words_time']; ?>
          </p>
          <p>
            <?php echo $v['user_content']; ?>
          </p>
          </div>
        </div>
        <hr color="#CCC"/>
         <?php }} ?>
      </div>
    </div>
  <!--留言结束-->