<!--中间内容 start-->
  <div id="content">
    <div class="clear"></div>
    <div class="homaMain">
      <div class="homeTop">
          <div class="homeTopLeft">
            <img src="static/my_1.jpg" alt="">
          </div>
          <div class="homeTopRight">
            <a href="index.php?a=add" class="homeTopRight1">发帖</a><br/>
            <br/>
            <a href="index.php?a=userinfo" class="homeTopRight2">编辑</a>
          </div>
      </div>
      <div class="homeTopButton">
        <img src="public/images/home_wei.png" alt="">
        <a>获得威望：<?php echo $userList['prestige']; ?></a>
        <img src="public/images/home_jifen.png" alt="">
        <a>获得积分：<?php echo $userList['jifen']; ?></a>
        <img src="public/images/home_dianzan.png" alt="">
        <a>获得点赞：<?php echo $userList['agree']; ?></a>
      </div>
      <div class="homeContent">
        <div class="contentTitle">
          <p>发布过的帖子</p>
        </div>
        <div class="content_text">
          <!--文章开始-->
          <!-- 首页需要判断数据库中有没有数据 -->
          <?php if($bbsList){ foreach($bbsList as $bbs_v){ ?>
          <div class="wz">
              <h3>
                <a href="<?php echo $bbs_v['url'] ?>" title=""><?php echo $bbs_v['bbs_title'] ?></a>
              </h3>
              <div class="content_textLeft">
                <a href="<?php echo $bbs_v['editurl'] ?>"class="homeTopRight1">修改帖子</a>
                <span onclick="del( '<?php echo $bbs_v['delurl']; ?>' ) ">
                  <a href="javascript:void(0)"class="homeTopRight2">删除帖子</a>
                </span>
              </div>
              <dl>
                <dd>
                  <p class="dd_text_2">
                    <span class="left author">
                      <?php echo $bbs_v['nickname']; ?>
                    </span>
                    <span class="left sj"><?php echo $bbs_v['add_time'] ?></span>
                    <span class="left fl">总浏览数:
                      <?php echo $bbs_v['browse'] ?>
                    </span>
                    <div class="clear"></div>
                  </p>
                </dd>
              <div class="clear"></div>
            </dl>
          </div>
          <!--文章分隔符-->
          <div class="line"></div>
          <?php }} ?>
          <!--文章结束--> 
        </div>
      </div> 
    </div>
  <div class="clear"></div>
  </div>
  <!--content end-->

  <script type="text/javascript">
function del(url){
    if(confirm("你真的忍心删除吗？")){
        window.location.href=url;
        
    }
    else{
        return;
    }
}
</script>