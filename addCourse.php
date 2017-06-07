
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
                        <a href="userinfo.php">我的信息</a></div>
                </div>
                <div class="ta1">
                    <strong>课程</strong>
                    <div class="leftbgbt2">
                    </div>
                </div>
                <div class="cdlist">
                    <div>
                        <a href="myCoursesCore.php">新增课程</a></div>
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

            <h2 class="mbx">课程 &gt; 新增课程 &nbsp;&nbsp;&nbsp;</h2>
            <div class="morebt">


                <ul id="ulStudMsgHeadTab">
                    <li><a class="tab2" onclick="" href="">个人资料</a> </li>
                </ul>

            </div>
            <div class="cztable">
                <form action="addCourseCore.php" method="post">
                    <table width="80%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="right" width="80">课程名称：</td>
                            <td align="left" width="160px;"><input type="text" name="cname"/></td>
                        </tr>
                        <tr>
                            <td align="right" width="80">上课时间：</td>
                            <td align="left" width="160px;"><input type="text" name="ctime"/></td>
                        </tr>
                        <tr>
                            <td align="right" width="80">所属系：</td>
                            <td align="left" width="160px;"><input type="text" name="cdep"/></td>
                        </tr>
                        <tr>
                            <td align="right" width="80">最大人数：</td>
                            <td align="left" width="160px;"><input type="text" name="cmax"/></td>
                        </tr>
                        <tr>
                            <td align="right" width="80">学分：</td>
                            <td align="left" width="160px;"><input type="text" name="cxuefen"/></td>
                        </tr>
                        <tr>
                            <td align="right" width="80">学时：</td>
                            <td align="left" width="160px;"><input type="text" name="cxueshi"/></td>
                        </tr>
                        <tr>
                            <td align="right" width="80">上课地点：</td>
                            <td align="left" width="160px;"><input type="text" name="cdidian"/></td>
                        </tr>
                        <tr>

                            <td align="center" width="160px;" colspan="2">
                                <input type="submit" name="add" value="添加" align="center"/>
                                <input type="reset" name="add" value="重置" align="center" style="margin-left:30px;"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
    <div class="footer">
        <p>
            &copy;copyright 2017 tanpeng.net 版权所有 </p>
    </div>
</div>

</body>
</html>
