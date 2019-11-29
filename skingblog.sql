/*
Navicat MySQL Data Transfer

Source Server         : php
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : skingblog

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-12-01 14:46:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `forum_bbs`
-- ----------------------------
DROP TABLE IF EXISTS `forum_bbs`;
CREATE TABLE `forum_bbs` (
  `bbs_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '帖子id',
  `uid` int(11) unsigned DEFAULT NULL COMMENT '用户id',
  `bbs_title` varchar(200) DEFAULT NULL COMMENT '帖子标题',
  `bbs_fen` varchar(20) DEFAULT NULL COMMENT '帖子分类',
  `bbs_zhai` varchar(50) DEFAULT NULL COMMENT '帖子摘要',
  `bbs_content` text COMMENT '帖子内容',
  `add_time` int(11) unsigned DEFAULT NULL COMMENT '添加时间',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态 1开启0关闭',
  `is_hot` tinyint(1) unsigned DEFAULT '0' COMMENT '1热门0非热门',
  `browse` int(11) unsigned DEFAULT '0' COMMENT '浏览数',
  `agree` int(11) DEFAULT '0' COMMENT '帖子点赞数量',
  PRIMARY KEY (`bbs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='帖子表';

-- ----------------------------
-- Records of forum_bbs
-- ----------------------------
INSERT INTO `forum_bbs` VALUES ('24', '14', '23213d1sf2asda', null, null, '15xsf1a2ds1', '1543227304', '1', '0', '10', '0');
INSERT INTO `forum_bbs` VALUES ('23', '4', '测试用户', null, null, '12121212', '1530892501', '1', '0', '39', '4');
INSERT INTO `forum_bbs` VALUES ('19', '3', '121', null, null, '15512414', '1530885278', '1', '1', '23', '0');
INSERT INTO `forum_bbs` VALUES ('21', '3', '1211212', null, null, '41515', '1530885407', '1', '1', '7', '0');
INSERT INTO `forum_bbs` VALUES ('22', '3', '点赞测试1', null, null, '213152', '1530885421', '1', '1', '29', '0');
INSERT INTO `forum_bbs` VALUES ('25', '14', '程序员应该会什么', null, null, '摘要：目前在国内有很多知名公司都采用PHP 作为主要的开发 Web 开发语言，php中文网小编就从专业的IT招聘网站拉钩网挑选几条php招聘要求。\r\n全球前100万的站点中，有70%左右的站点用PHP开发，它与Linux/Mysql/Apache/Nginx等组成黄金搭档，无论从成本投入和开发周期的考虑，PHP都是一个不错的选择。\r\nPHP可用在网站开发，API接口开发，服务器端开发，广告系统开发，内部OA系统开发，移动端后台开发，游戏开发等，特别在移动互联网发展迅猛的今天，PHP借机上位，重回一线开发语言行列。\r\n\r\n目前在国内有很多知名公司都采用PHP 作为主要的开发 Web 开发语言，比较有代表性的一线公司有数字厂（360），狼厂（Baidu），鹅厂（Tencent），猫厂（Alibaba），米厂（小米），狗厂（搜狗）等代表。\r\n\r\nphp中文网小编就从专业的IT招聘网站拉钩网里挑选两个厂的php招聘要求。\r\n\r\n阿里巴巴大优酷数据战略中心招聘php工程师职位要求：\r\n\r\n1. 有5年以上PHP开发经验,有大型网站或者数据中心开发经验者优先；\r\n\r\n2.至少熟悉一门非前端的语言（如Java/C/C++/Python/Ruby），熟悉常用的开发框架，具有良好的编程能力；\r\n\r\n3. 具备跨终端的前端开发能力，在Web（PC+Mobile）/Node.js/Native App三个方向上至少精通一个方向，具备多个的更佳，鼓励在Native和Web技术融合上的探索；\r\n\r\n4. 熟练应用HTML/CSS/JS等\r\n\r\n5. 熟练掌握基本和常用的数据结构算法，熟悉Mysql数据库及NoSQL技术；\r\n\r\n6. 具有良好的学习能力，时间和流程意识强，有较好的沟通交流能力及团队合作意识，责任心强，有积极主动的工作态度，能够迅速融入团队。\r\n\r\n薪资：15k-25k/北京/五险一金,补充医疗,定期体检\r\n\r\n360公司php工程师任职要求：\r\n\r\n1. 精通PHP/MySQL开发\r\n\r\n2. 熟悉JavaScript及部分web前端框架，例如Vue.js,AngularJS 等等\r\n\r\n3. 熟悉主流PHP框架，例如YII、ThinkPHP等，并有至少一种开发经验\r\n\r\n4. 熟悉apache/Nginx、redis、memcached的管理和维护\r\n\r\n5. 对JS前端感兴趣者优先考虑\r\n\r\n6. 对分布式领域有一定了解，具有开发、调试或维护的相关经验\r\n\r\n7. 具备良好的团队合作精神，高度的责任感，善于沟通，为人踏实，抗压能力强，拥有严谨的工作态度\r\n\r\n8. 薪资：15k-30k /北京 / 极具竞争力的福利待遇，最核心的部门\r\n\r\n工资福利是不是很诱人？但是他们的任职要求你能达到吗？你可能说这些大公司我很难进去，那一般的公司招聘php要求是什么呢？php中文网认为下面的知识和技能是必须要精通的：\r\n\r\n1. HTML+DIV+CSS，如果这个都不会，别学php了吧，说明你根本就对互联网不感冒，除非你的php代码写的非常牛，那么你可以成为一个纯粹的后端开发者。\r\n2. PHP基础，不用多说，基本语法总得会吧\r\n3. MySQL，虽然被Oracle收购了，不过截至现在还是非常流行的；其实，学不学mysql并不重要，重要的是你的SQL用的转不转，Oracle，MySQL，DB2等等数据库的sql基本是一样的、通用的。\r\n4. PDO，不会这个的人就好像不懂普通话一样\r\n5. js，虽然不是php程序员的工作范畴，可是很多美工不会，所以你必须会\r\n6. jQuery，没什么好说的，会js的人要学会用jQUERY是很简单的一件事情啦，关键是有很多东西需要记忆\r\n7. MVC模式，规范的文档管理使你心情大为痛快\r\n8. OOP，面向对象，据说和SOA、面向组件有得一拼，不会等于找死\r\n9. 开发中常用的小模块，例如文件下载、安全处理、日历控件、登陆注册、购物车、用户管理、生成PDF、导出excel等\r\n10. ajax，不会这个啊，赶紧学，QQ空间、sina微博都在用呢，从应用层面上说没什么技术含量、就几行js\r\n11. smarty，认真学一下这个，以后就会慢慢发现很多开源程序的模板机制就和这个非常类似了，估计是照抄人家的代码吧\r\n12. 基本的代码测试，不用多说，firebug、google浏览器、跨平台测试、代码审计等这些是必须的\r\n13. svn和git两款版本管理软件，会一个就行，不过主要是SVN了，github可以经常上去看看，composer依赖管理可以在你的项目中使用了。\r\n14. 编辑器，vi、eclipse、JetBrains PhpStorm、zend studio、editplus、sublime等, sublime比较轻量。\r\n15. 熟悉Linux，Linux是php的根，把php放在windows上面跑的人除了傻帽就是炫富\r\n16. 熟悉国内三个开源系列源码：discuz些列（主要是论坛程序discuz x和UC两个模块），cms系列（dede和phpcms），shop系列（ecshop）\r\n17. 会CI、TP、YII和ZF这几个框架，现在比较流行的框架laravel使用了大量的新技术，可以拿来练练手。\r\n18. 会学习，会使用baidu等搜索引擎，会借助身边的资源\r\n19. 专属文件夹，常用的资源、代码模块、笔记……装在这个里面，可以大大提高工作效率\r\n20. 不断学习，包括php和其他知识，如果你被一家公司绑定了、被一个行业绑定了，你就死了；别以为一个技术、一家公司可以养你一辈子，任何一个人最重要的部分还是脖子往上的那一小段\r\n只要掌握了以上几点，虽然顶尖公司可能进不去，但是在如今人才为王的市场状况下，部分融资不错的发展型公司也是不错的选择！比如像某团，某集，某滴等，包括现在热门的的互联网金融公司也都纷纷打出非常具有竞争力的薪资和各种优厚的福利，当然也有少数土豪公司，只要人好，天黑都不怕！所以想学php趁现在快学吧！', '1543228291', '1', '0', '4', '0');
INSERT INTO `forum_bbs` VALUES ('26', '14', '新加坡100M带宽,国内延迟70ms,仅800元', null, null, '▇ 新加坡100M带宽，延迟80ms\r\nE3_8G_1TB_100M_5IP_800元\r\n促：E3_32G_1TB SSD_1200元\r\n\r\n▇ 马来西亚，独享带宽，延迟70ms\r\nL5630_16G_1TB_15M_700元\r\nL5630_16G_240Gssd_15M_700元\r\n\r\n▇ 香港10M独享，CN2直连\r\nL5520_8G_1TB_10M_3IP_800元\r\nL5630*2_16G_1TB_10M_3IP_900元\r\n\r\n▇ 美国CN2，国内延迟最低128ms\r\nE3_16GB_30M_1IP_750元\r\nE5_32GB_30M_1IP_1200元\r\n\r\n更多促销好货，关注页面：\r\nhttps://www.yunzz.net/p/specials.html?web\r\n\r\n联系QQ： 610000152\r\n推广员：ftp242057n', '1543228759', '1', '0', '3', '0');
INSERT INTO `forum_bbs` VALUES ('27', '14', 'PHP学习路线图', null, null, '在网上很多人公布了太多的PHP学习路线图，本人在互联网公司工作十余年，也带了很多PHP入门的新手，将他们的一些问题和学习路线图为大家整理出来，希望很多小白少走弯路。\r\n\r\n一、 网上某些错误的学习路线图\r\n网上有些错误的学习路线图，让学完HTML、CSS后立马去学Javascript和jQuery等，这种课程简直是对牛弹琴。你特么的怎么不去搞个前端工程师培训或者是吹牛逼的全栈工程师培训呀。\r\n\r\n这种错误的路线图的问题在于将重心未放在PHP方向，而放在了前端方向。将面向对象，业务思想、SQL转化等PHP关注的重心没有放置在之前而放置在之后了。PHP的重心还是要放在业务处理上。\r\n\r\n二、 前期加快入门\r\n前期的时候要加快入门的进度，学一些HTML和Css能基本写出网页后，就快速进入到PHP阶段。\r\n\r\n因为大家是自学的PHP，学了半天还没搞到PHP的话，会放松对学习的热情，从而造成自学效果下降。\r\n\r\n学完HTML和Css不要学Js，立马进入到环境的搭建上来。\r\n\r\n三、 关于开发 环境\r\n很多人在这儿走弯路，喜欢找不到同教程看环境搭建。我们在公司里面开发的时候，真正的是使用的Linux环境进行开发和线上代码运行的。\r\n\r\n在学习的过程中，我建议：快、快、快。少纠结、代码能跑就行。\r\n\r\n此处，推荐使用XAMPP、AppServ、PHPStudy、WampServer等工具快速安装完成，开始自己的第一段\r\n\r\n&lt;?php\r\nphpinfo();\r\n四、 基本语法\r\n环境搭建完，开始要学习的东西有以下一些东西了：变量、数据类型、注释、常量、if…else、swith…case、while、do..while、for、运算符、数组、函数、常用函数；\r\n\r\n这些过程当中，很多小白容易纠结为啥啥都写不出来呢。\r\n\r\n此外，全是些基本语法，一定要记住，多写多记多背。\r\n\r\n在心理上觉得啥都写不出来是很正常的。\r\n\r\n五、 面向过程使用阶段\r\n在这一阶段就能够写出东西来了，学完MySQL数据库后立马开始学习PHP连接数据库吧，学习完成后写个留言本、分页、再学个cookie和session实现用户登陆、注册。学个GD后开始实现个验证码吧。\r\n\r\n最后在这个阶段你可以写一个论坛、贴吧或者商城出来。\r\n\r\n六、 面向对象和MVC\r\n在这个阶段不要再看PHP5的视频了，最好看PHP7以后的视频，特别是新的一些标准，例如：composer、PSR、面向对象的设计模式等。你可以看一些千锋PHP最新的视频，这些技术点全都讲到了。\r\n\r\n这一块学习顺序：\r\n\r\n面向对象基本语法；\r\n\r\n写几个常用类；\r\n\r\n组合MVC\r\n\r\n学习设计模式\r\n\r\n学习PSR\r\n\r\n七、 深入学学前端\r\nPHP学好了，前端课程学起来跟玩似的了。因为你已经有了一门语言的基础了。所以，学习一些JS，再学一些jQuery，bootstrap够你用了。\r\n\r\n八、 深入ThinkPHP5.0或者Laravel\r\n深入学习一个或者两个框架，然后结合前端的知识，写二个以上的项 目出来吧。\r\n\r\n你可以写个多品类的商城、写一个OA系统等。\r\n\r\n九、 学习Linux服务器\r\n学习Linux服务器的主要了解多服务器的部署，了解软件安装，特别是LAMP和LNMP的环境搭建。\r\n\r\n将对应的代码搭建到自己部署的服务器上去。\r\n\r\n最后买一个域名和阿里云服务器，真正的将代码部署到云服务器上去，走一次上线流程，用一下git管理一下代码会更棒。\r\n\r\n十、 深入大并发架构的学习\r\n你非常有必要学习一下大并发架构，学一些NoSQL技术、Swoole技术、keepalived技术等多项不同的技术。\r\n\r\n让自己全面了解服务器集群下代码如何运行的更加高效。\r\n\r\n并且全面的了解一下PHP的socket、进程、线程、协程等技术，对你的代码的技术提升是很有帮助的。\r\n\r\n建议这个时候使用Redis、RockMQ写一个大并发的、多服务器的秒杀出来。', '1543228789', '1', '1', '80', '0');
INSERT INTO `forum_bbs` VALUES ('28', '14', '测试帖子分类', '数据库学习', '1', '1212这个网站很好', '1543473466', '1', '0', '8', '0');
INSERT INTO `forum_bbs` VALUES ('29', '14', '125d1s5f1a5到底', 'java学习', '1', ' fdsa2f626262626262626', '1543569667', '1', '0', '7', '0');

-- ----------------------------
-- Table structure for `forum_comment`
-- ----------------------------
DROP TABLE IF EXISTS `forum_comment`;
CREATE TABLE `forum_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `bbs_id` int(11) unsigned DEFAULT NULL COMMENT '帖子ID',
  `uid` int(11) unsigned DEFAULT NULL COMMENT '用户ID',
  `content` varchar(200) DEFAULT NULL COMMENT '评论内容',
  `add_time` int(11) unsigned DEFAULT NULL COMMENT '评论时间',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of forum_comment
-- ----------------------------
INSERT INTO `forum_comment` VALUES ('9', '23', '4', '121212121', '2018');
INSERT INTO `forum_comment` VALUES ('10', '27', '14', '123', '1543470699');
INSERT INTO `forum_comment` VALUES ('11', '27', '14', '12', '1543471462');
INSERT INTO `forum_comment` VALUES ('12', '27', '14', '好', '1543471468');

-- ----------------------------
-- Table structure for `forum_user`
-- ----------------------------
DROP TABLE IF EXISTS `forum_user`;
CREATE TABLE `forum_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `nickname` varchar(50) DEFAULT NULL COMMENT '用户昵称',
  `head` varchar(100) DEFAULT NULL COMMENT '用户头像',
  `account` varchar(50) DEFAULT NULL COMMENT '账号',
  `email` varchar(50) DEFAULT NULL COMMENT '用户邮箱',
  `psword` char(32) DEFAULT NULL COMMENT '密码',
  `add_time` int(11) unsigned DEFAULT NULL COMMENT '注册时间',
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '状态1开启0关闭2审核',
  `prestige` int(11) DEFAULT '1' COMMENT '用户威望，相同与等级',
  `jifen` int(11) DEFAULT '0' COMMENT '用户的积分',
  `is_admin` tinyint(1) unsigned DEFAULT '0' COMMENT '管理员1是0否',
  `agree` int(11) DEFAULT '0' COMMENT '给用户主页点赞',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of forum_user
-- ----------------------------
INSERT INTO `forum_user` VALUES ('17', '1212', 'static/my_1.jpg', '941161930', '941161930@qq.com', '202cb962ac59075b964b07152d234b70', '1543580471', '1', '1', '0', '0', '0');
INSERT INTO `forum_user` VALUES ('11', '123', 'static/my_1.jpg', 'sking', '123456@qq.com', '123', '1530947234', '1', '31', '0', '0', '3');
INSERT INTO `forum_user` VALUES ('10', '1231', 'static/my_1.jpg', '12311', '123456@qq.com', '123', '1530947204', '1', '31', '851', '0', '4');
INSERT INTO `forum_user` VALUES ('16', '1212', 'static/img/avatar-max-img.png', '121', '1234561@qq.com', '202cb962ac59075b964b07152d234b70', '1543580373', '1', '1', '0', '0', '0');
INSERT INTO `forum_user` VALUES ('15', '1212', 'static/my_1.jpg', '123456789', '123456@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '1543226307', '1', '31', '0', '0', '0');
INSERT INTO `forum_user` VALUES ('14', '我们', 'static/my_1.jpg', '123456', '783115652123@qq.com', 'e10adc3949ba59abbe56e057f20f883e', null, '1', '31', '100', '1', '100');

-- ----------------------------
-- Table structure for `forum_words`
-- ----------------------------
DROP TABLE IF EXISTS `forum_words`;
CREATE TABLE `forum_words` (
  `words_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言表',
  `uid` int(11) DEFAULT NULL COMMENT '用户id',
  `user_name` varchar(20) DEFAULT NULL COMMENT '留言者姓名',
  `user_email` varchar(20) DEFAULT NULL COMMENT '留言者邮箱',
  `user_content` varchar(100) DEFAULT NULL COMMENT '留言内容',
  `words_time` int(11) DEFAULT NULL COMMENT '留言时间',
  `words_static` int(11) DEFAULT '1' COMMENT '是否通过审核',
  PRIMARY KEY (`words_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of forum_words
-- ----------------------------
INSERT INTO `forum_words` VALUES ('4', '14', '121', '212', '121', '1543580774', '1');
INSERT INTO `forum_words` VALUES ('2', '14', '121', '2121', '212', '1543570024', '1');
INSERT INTO `forum_words` VALUES ('3', '14', '1515', '15151', '51515', '1543570062', '1');
