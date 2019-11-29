<?php 
/**
*mrleePHP网页
*2018-11-25
*/

/*设置字符编码*/
header("Content-type:text/html; charset=utf-8");

/*设置时区*/
date_default_timezone_set("PRC");

/*设置域名*/
$url="http://localhost/phpwork/personalProject/skingblog1/index.php";

/*设置每页显示的数量*/
$num=10;

/*设置页面标题后缀*/
define('SITE_SUFFIX','mrleePHP个人网站');

/*设置数据库连接参数*/
$db=array(
	'db_host' => '127.0.0.1',
	'db_user' => 'root',
	'db_pass' => '',
	'db_name' =>'skingblog'
	);

/*设置用到的数据表*/
$bbsTable  = 'forum_bbs';    //帖子
$comTable  = 'forum_comment';//评论
$userTable = 'forum_user';   //用户
$wordsTable = 'forum_words';   //留言表
//加载模板选择脚本
$getNo = isset($_GET['a']) ? $_GET['a'] : 'list';
switch ($getNo)
{
    case 'login':   //登录
        include 'controller/loginAction.php';break;
    case 'reg':   //登录
        include 'controller/regAction.php';break;
    case 'logout':  //退出登录
        session_start();
        if (session_destroy()){
            echo "<script>location.href='index.php';</script>";
        }
        break;
    case 'user':     //个人中心
        include 'controller/userAction.php';break;
    case 'userinfo':     //个人中心编辑按钮
        include 'controller/userinfoAction.php';break;
    case 'list':    //显示帖子列表
        include 'controller/listAction.php';break;
    case 'about':    //显示关于我界面
        include 'controller/aboutAction.php';break;
    case 'riji':    //显示日记界面
        include 'controller/rijiAction.php';break;
    case 'shuo':    //显示关于我界面
        include 'controller/shuoAction.php';break;
    case 'wordsList': //显示留言界面
        include 'controller/wordsListAction.php';break;
    case 'wordsAdd':  //用户留言
        include 'controller/wordsAddAction.php';break;
    case 'add':    //显示关于我界面
        include 'controller/addAction.php';break;
    case 'details': //帖子详情
        include 'controller/detailsAction.php';break;
    case 'comment': //帖子评论
        include 'controller/commentAction.php';break;
    case 'edit':    //修改发帖
        include 'controller/editAction.php';break;
    case 'oper':    //删除帖子、设置热门帖子
        include 'controller/operAction.php';break;
    case 'search':  //帖子搜索
        include 'controller/searchAction.php';break;

    default:
        echo '<script> alert(\'参数错误~~\');location.href=\'index.php\';</script>';
}
?>
