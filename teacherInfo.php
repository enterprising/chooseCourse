
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
        网上选课系统-老师端首页
    </title>
    <link href="Style/StudentStyle.css" rel="stylesheet" type="text/css"/>
    <link href="Script/jBox/Skins/Blue/jbox.css" rel="stylesheet" type="text/css"/>
    <link href="Style/ks.css" rel="stylesheet" type="text/css"/>
    <script src="Script/jBox/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="Script/jBox/jquery.jBox-2.3.min.js" type="text/javascript"></script>
    <script src="Script/jBox/i18n/jquery.jBox-zh-CN.js" type="text/javascript"></script>
    <script src="Script/Common.js" type="text/javascript"></script>
    <script src="Script/Data.js" type="text/javascript"></script>

    <script src="Script/changeOption.js" type="text/javascript"></script>
    <script src="Script/rl.js" type="text/javascript"></script>
</head>
<body>


<div class="banner">
    <div class="bgh">
        <div class="page">
            <div id="logo">
                <a href="index2.php">
                    <img src="images/banner.jpg" alt="" width="160" height="50" />
                </a>
            </div>
            <div class="topxx">

                工号<?php session_start(); $sid = $_SESSION['tid'];echo $sid ?>， <?php $sid = $_SESSION['tname'];echo $sid ?>老师，欢迎您！
                <a href="#">密码修改</a>
                <a onclick="loginOut()" href="javascript:">安全退出</a>
            </div>
            <div class="blog_nav" style="margin-top: 40px;">
                <ul>
                    <li><a href="userinfo.php">个人中心</a></li>
                    <li><a href="myCoursesCore.php">课程</a></li>
                    <li><a href="score.php">成绩录入</a></li>
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
                        <a href="teacherInfo.php">我的信息</a></div>
                </div>
                <div class="ta1">
                    <strong>课程</strong>
                    <div class="leftbgbt2">
                    </div>
                </div>
                <div class="cdlist">
                    <div>
                        <a href="addCourseCore.php.php">新增课程</a></div>
                </div>


                <div class="ta1">
                    <strong>成绩</strong>
                    <div class="leftbgbt2">
                    </div>
                </div>
                <div class="cdlist">
                    <div>
                        <a href="score.php">成绩录入</a></div>
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

            <h2 class="mbx">个人中心 &gt; 我的信息 &nbsp;&nbsp;&nbsp;</h2>
            <div class="morebt">


                <ul id="ulStudMsgHeadTab">
                    <li><a class="tab2" onclick="" href="">个人资料</a> </li>
                </ul>

            </div>
            <div class="cztable">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="right" width="80">工号：</td>
                        <td><?php echo $_SESSION['tid']?></td>
                        <td align="right" width="90">姓名：</td>
                        <td><?php echo $_SESSION['tname']?>&nbsp;</td>

                        <td rowspan="4"><div align="center"><img id="pic_face"  height="160" width="120" src="images/<?php echo $_SESSION['stx'] ?>" style="padding:2px 2px 5px; border:1px #ddd solid;"></div>&nbsp;</td>
                    </tr>


                </table>
            </div>

        </div>
    <div class="footer">
        <p>
            &copy;copyright 2017 tanpeng.net 版权所有 </p>
    </div>
</div>

</body>
</html>
