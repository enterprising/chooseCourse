<?php
session_start();
$_SESSION['username'] = '谭鹏';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
        网上选课系统
    </title>
    <link href="Style/StudentStyle.css" rel="stylesheet" type="text/css"/>
    <link href="Script/jBox/Skins/Blue/jbox.css" rel="stylesheet" type="text/css"/>
    <link href="Style/ks.css" rel="stylesheet" type="text/css"/>
    <script src="Script/jBox/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="Script/jBox/jquery.jBox-2.3.min.js" type="text/javascript"></script>
    <script src="Script/jBox/i18n/jquery.jBox-zh-CN.js" type="text/javascript"></script>
    <script src="Script/Common.js" type="text/javascript"></script>
    <script src="Script/Data.js" type="text/javascript"></script>
    <script type="text/javascript">

    </script>

    <script type="text/javascript">

    </script>
</head>
<body>

<div class="banner">
    <div class="bgh">
        <div class="page">
            <div id="logo">
                <a href="Index.aspx.html">
                    <img src="images/banner.jpg" alt="" width="160" height="50" />
                </a>
            </div>
            <div class="topxx">

                <?php $sid = $_SESSION['xuehao'];echo $sid ?>学员：<?php $sid = $_SESSION['username'];echo $sid ?>，欢迎您！
                <a href="#">密码修改</a>
                <a onclick="loginOut()" href="javascript:">安全退出</a>
            </div>
            <div class="blog_nav" style="margin-top: 40px;">
                <ul>
                    <li><a href="userinfo.php">个人中心</a></li>
                    <li><a href="myCoursesCore.php">课程</a></li>
                    <li><a href="chooseCourseCore.php">选课</a></li>
                    <li><a href="score.php">成绩</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="page">
    <div class="box mtop">
        <div class="leftbox">
            <div class="l_nav2">
                <div class="ta1">
                    <strong>个人中心</strong>
                    <div class="leftbgbt">
                    </div>
                </div>
                <div class="cdlist">
                    <div>
                        <a href="userinfo.php">我的信息</a></div>
                    <div>
                        <a href="changeInfo.php">修改信息</a></div>

                </div>
                <div class="ta1">
                    <strong>课程</strong>
                    <div class="leftbgbt2">
                    </div>
                </div>
                <div class="cdlist">
                    <div>
                        <a href="myCoursesCore.php">我的课程</a></div>
                </div>
                <div class="ta1">
                    <strong>选课</strong>
                    <div class="leftbgbt2">
                    </div>
                </div>
                <div class="cdlist">
                    <div>
                        <a href="chooseCourseCore.php">在线选课</a></div>
                    <div>
                        <a href="DelmyCoursesCore_Bef.php">在线退课</a></div>
                </div>

                <div class="ta1">
                    <strong>成绩</strong>
                    <div class="leftbgbt2">
                    </div>
                </div>
                <div class="cdlist">
                    <div>
                        <a href="score.php">成绩查询</a></div>
                </div>
                <div class="ta1">
                    <a href="#"
                       target="_blank"><strong>教学系统</strong></a>
                    <div class="leftbgbt2">
                    </div>
                </div>
            </div>
        </div>
        <div class="rightbox">

            <h2 class="mbx">选课 &gt; 在线选课 &nbsp;&nbsp;&nbsp;</h2>
            <div class="morebt">


                <ul id="ulStudMsgHeadTab">
                    <li><a class="tab2" onclick="" href="Index.aspx.html">在线选课</a></li>
                </ul>

            </div>
            <div class="cztable">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">
                    <tr>
                        <th width="6%">课程号</th>
                        <th style="padding-left: 20px;width: 15%;">
                            课程名称
                        </th>
                        <th style="width: 6%; text-align: center;">
                            老师
                        </th>
                        <th style="width: 5%; text-align: center;">
                            学分
                        </th>
                        <th style="width: 5%; text-align: center;">
                            学时
                        </th>
                        <th style="width: 9%; text-align: center;">
                            上课时间
                        </th>
                        <th style="width: 9%; text-align: center;">
                            上课地点
                        </th>
                        <th style="width: 9%; text-align: center;">
                            已选/最大人数
                        </th>
                        <th style="width: 13%; text-align: center;">
                            所属系
                        </th>
                        <th style="width: 6%; text-align: center;">
                            操作
                        </th>
                    </tr>
                    <?php if (!empty($_SESSION['courses'])) { ?>
                        <?php foreach ($_SESSION['courses'] as $row) { ?>
                            <tr>
                                <td class="xxleft">
                                    <?php echo $row['cid'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cname'] ?>
                                </td>
                                <td>
                                    <?php
                                        $tid = $row['cteacher'];
                                        include("db/db_properties.php");
                                        $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
                                        $db->query('set names utf8');
                                        $rs = $db->query("select tname from teacher where tid = '$tid'");
                                        $arr = $rs->fetchAll();
                                        $tname = $arr[0]['tname'];
                                        echo $tname;
                                    ?>
                                </td>
                                <td>
                                    <?php echo $row['cxuefen'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cxueshi'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ctime'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cdidian'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cyixuan'] ?>/<?php echo $row['cmax'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cdep'] ?>
                                </td>
                                <td>
                                    <a href="chooseCourseCheck.php?cid=<?php echo $row['cid'] ?>&sid=<?php echo $_SESSION['xuehao'] ?>">选择</a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="9">尚未有课程发布，请耐心等待！</td>
                        </tr>
                    <?php } ?>


                </table>
                <div class='MainStyle'>
                    <div class=''><a href='chooseCourseCore.php?page=1'
                                     target='_self'>首页</a></div>
                    <div class=''><a href="chooseCourseCore.php?page=<?php echo($_SESSION['page'] - 1) ?> "
                                     target='_self'>上一页</a></div>

                    <?php for ($i = 1; $i <= $_SESSION['maxPage']; $i++) { ?>
                        <div class=''><a href='chooseCourseCore.php?page=1' target='_self'><?php echo $i; ?></a></div>
                    <?php } ?>

                    <div class=''><a href="chooseCourseCore.php?page=<?php echo($_SESSION['page'] + 1) ?> "
                                     target='_self'>下一页</a></div>
                    <div class=''><a href="chooseCourseCore.php?page=<?php echo $_SESSION['maxPage'] ?> "
                                     target='_self'>尾页</a></div>
                    <div class=''>总共<b><?php echo $_SESSION['count'] ?></b>条数据</div>
                    <div class=''>每页<b><?php echo $_SESSION['pageSize'] ?></b>条数据</div>
                    <div class=''><b><?php echo $_SESSION['page'] ?></b>/<?php echo $_SESSION['maxPage'] ?></div>
                    <div class='SearchStyle'>
                        <input type='text' id='john_Page_Search'/>
                    </div>
                    <div class=''>
                        <input type='button' value='Go' onclick="gonewpage()"/>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        function gonewpage() {
            var page = document.getElementById("john_Page_Search").value;
            location = "chooseCourseCore.php?page=" + page;
        }
    </script>

    <div class="footer">
        <p>
            &copy;copyright 2017 tanpeng.net 版权所有 站长统计</p>
    </div>
</div>
</body>
</html>
