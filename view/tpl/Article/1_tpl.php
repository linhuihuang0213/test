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
      <p class="p1">mrlee个人博客</p>
      <p class="p2">让作业不再困难</p>
      <p class="p3">蔡徐坤</p>
    </ul>
  </section>
</div>
<!--end banner-->
	<!--中间内容 start-->
  <div id="content">
      <!--left开始-->
    <div class="left" id="c_left">
      <div class="s_tuijian">
        <h2>博客<span>信息</span></h2>
			</div>
    <div class="content_text">
        <div class="content_title">
          <span><?php echo $details['bbs_title']; ?></span>
        </div>
        <div class="content_fabu">
          <span>发布时间：『 <?php echo $details['add_time']; ?>』  博客类别：<?php echo $details['bbs_fen']; ?>  阅读(<?php echo $details['browse']; ?>)</span>
        </div>
        <div class="mod-body">
          <?php echo nl2br($details['bbs_content']); ?>
        </div>
        <div class="content_weibu">
            <span>上一篇：<a href="">从0开始学PHP有多难？？</a></span><br/><br/>
            <span>下一篇：没有了</span>
        </div>
        <div class="content_comment">
          <form action="index.php?a=comment" method="post">
            <input type="text" name="bbs_id" value="<?php echo $details['bbs_id'] ?>" style="display:none;">
            <div class="comment_Left">
              <img src="<?php echo !empty($userList['head'])?$userList['head']:'static/my_1.jpg'; ?>" alt="">
            </div>
            <div class="comment_Right">
              <textarea name="content" id="" cols="30" rows="10" placeholder="发表你的评论……"></textarea>
            </div>
            <div class="conFaTieBut">
              <input type="submit" value="评论">
            </div>
          </form>
        </div>
        <!--评论开始-->
        <div class="wordsWen">
        <header>
          <img src="public/images/icon.gif" alt="驴友评论"  />
        </header>
        <hr color="#CCC"/>
        <?php if($comment){ foreach($comment as $com){ ?>
        <div class="comment">
          <div class="comment_Left">
              <img src="<?php echo !empty($userList['head'])?$userList['head']:'static/my_1.jpg'; ?>" alt="">
          </div>
          <div class="cWen">
          <p>
            <span>发布人：<?php echo $com['nickname']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="sj">时间：<?php echo date('Y-m-d H:i',$com['add_time']); ?></span>
          </p>
          <p>
            <?php echo nl2br($com['content']); ?>
          </p>
          </div>
        </div>
        <hr color="#CCC"/>
        <?php }} ?>
      </div>
    </div>
    <!--所有文章结束-->
	</div>
  <!--left end-->
  <!--right-->
  <div class="right" id="c_right">
    <div class="s_about">
      <!--显示天气-->
      <div class="weather">
        <iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe>
      </div>
    </div>
    <!--播放音乐-->
    <div class="s_about">
        <div class="s_music">
          <audio src="../public/video/1.mp3" controls></audio>
        </div>
    </div>
    <!--第一个栏目分类开始-->
    <div class="lanmubox">
      <div class="hd">
        <ul><li>精心推荐</li></ul>
      </div>
    <div class="bd">
      <ul>
        <?php if($bbsListHot){ foreach($bbsListHot as $hot){ ?>
        <li>
          <a href="<?php echo $hot['url']; ?>" title=""><?php echo $hot['bbs_title'] ?></a>
        </li>
        <?php }} ?>
      </ul> 
    </div>
    </div>
    <!--第一个栏目分类结束-->
    <!--第二个栏目分类开始-->
    <div class="lanmubox">
      <div class="hd">
        <ul><li>日志类别</li></ul>
      </div>
      <div class="bd">
        <ul>
          <li>
            <a href="#" title="">PHP学习</a>
          </li>
          <li>
            <a href="#" title="">UML学习</a>
          </li>
          <li>
            <a href="#" title="">随心说说</a>
          </li>
          <li>
            <a href="#" title="">今日感想</a>
          </li>
          <li>
            <a href="#" title="">未来打算</a>
          </li>
        </ul>   
      </div>
    </div>
    <!--第二个栏目分类结束-->
    <div class="link">
      <h2>广告赞助</h2>
        <p>
          <a href="#">并没有哦</a>
        </p>
    </div>
  </div>
  <!--right end-->
  <div class="clear"></div>
  </div>
  <!--content end-->