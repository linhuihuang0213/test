<!--中间内容 start-->
  <div id="content">
      <!--left开始-->
    <div class="left" id="c_left">
      <div class="s_tuijian">
        <h2>文章<span>推荐</span></h2>
      </div>
    <div class="content_text">
      <!--文章开始-->
      <?php if($bbsList){ foreach($bbsList as $v){  ?>
      <div class="wz">
          <h3>
            <a href="<?php echo $v['url']; ?>" title=""><?php echo $v['bbs_title']; ?></a>
          </h3>
          <dl>
            <dt>
              <img src="static/wz_1.jpg" width="200"  height="123" alt="">
            </dt>
            <dd>
              <p class="dd_text_1"><?php echo $v['bbs_content']; ?></p>
              <p class="dd_text_2">
                <span class="left author"><?php echo $v['nickname']; ?></span>
                <span class="left sj">时间:<?php echo $v['add_time']; ?></span>
                <span class="left fl">浏览数:
                 <?php echo $v['browse']; ?>
                </span>
                <span class="left yd">
                <a href="<?php echo $v['url']; ?>" title="阅读全文">阅读全文</a></span>
                <div class="clear"></div>
              </p>
            </dd>
          <div class="clear"></div>
        </dl>
      </div> 
      <!--文章结束--> 
      <!--文章分隔符-->
      <div class="line"></div>
      <?php }} ?>
      <!--文章分页按钮-->
      <div class="page">
        <?php echo $bbsListPage; ?>
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
          <audio src="public/video/1.mp3" controls></audio>
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
            <a href="#" title="">UML建模</a>
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
          <a href="#">不好意思垃圾PHP没人赞助</a>
        </p>
    </div>
  </div>
  <!--right end-->
  <div class="clear"></div>
  </div>
