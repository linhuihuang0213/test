<!--中间内容 start-->
  <div id="content">
      <!--left开始-->
    <div class="left" id="c_left">
      <div class="s_tuijian">
        <h2>发表<span>主题</span></h2>
			</div>
      <div class="conFaTie">
        <form action="index.php?a=add" method="post">
        <div class="conFaTieLei">
          <select id="inputOp" name="bbs_fen" class="conFaTieLei1" >
            <option>PHP相关经验</option>
            <option>UML建模</option>
            <option>随心说说</option>
            <option>今日感想</option>
            <option>未来打算</option>
          </select>
        </div>
        <div class="conFaTieTitle">
          <input type="text" name="bbs_title" placeholder="标题……">
        </div>
        <div class="conFaTieTxt">
            <img src="../static/shuru.png" alt="">
              <textarea name="bbs_content" id="" cols="30" rows="10" placeholder="请输入你想要的发布的内容……"></textarea>   
        </div>
        <div class="conFaTieBut">
          <input type="submit" value="发帖">
        </div>
      </div>
      </form>
    <!--所有文章结束-->
	</div>
  <!--left end-->
  <!--right-->
  <div class="right" id="c_right">
    <!--第一个栏目分类开始-->
    <div class="lanmubox">
      <div class="hd">
        <ul><li>发帖说明</li></ul>
      </div>
    <div class="bd">
      <ul>
				<li>
          <a href="#" title="">不能发布相同内容</a>
        </li>
				<li>
          <a href="#" title="">不能发布敏感的时政言论</a>
        </li>
				<li>
          <a href="#" title="">严禁发布黄赌毒内容</a>
        </li>
				<li>
          <a href="#" title="">违反一次将会被警告，三次将被封号</a>
        </li>
				<li>
          <a href="#" title="">谢谢合作！</a>
        </li>
			</ul>   
    </div>
    </div>
    <!--第一个栏目分类结束-->
  </div>
  <!--right end-->
  <div class="clear"></div>
  </div>
  <!--content end-->