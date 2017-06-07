
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
        网上选课系统
    </title><link href="Style/StudentStyle.css" rel="stylesheet" type="text/css" /><link href="Script/jBox/Skins/Blue/jbox.css" rel="stylesheet" type="text/css" /><link href="Style/ks.css" rel="stylesheet" type="text/css" />
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
                <a href="">
                    <img src="images/banner.jpg" alt="" width="160" height="50" />
                </a>
            </div>
            <div class="topxx">

                <?php session_start(); $sid = $_SESSION['xuehao'];echo $sid ?>学员：<?php $sid = $_SESSION['username'];echo $sid ?>，欢迎您！
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

            <h2 class="mbx">个人中心 &gt; 我的信息 &nbsp;&nbsp;&nbsp;</h2>
            <div class="morebt">


                <ul id="ulStudMsgHeadTab">
                    <li><a class="tab2" onclick="" href="">个人资料</a> </li>
                </ul>

            </div>
            <div class="cztable">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="right" width="80">姓名：</td>
                        <td><?php echo $_SESSION['username']?></td>
                        <td align="right" width="90">学号：</td>
                        <td><?php echo $_SESSION['xuehao']?>&nbsp;</td>

                        <td rowspan="4"><div align="center"><img id="pic_face"  height="160" width="120" src="images/<?php echo $_SESSION['stx'] ?>" style="padding:2px 2px 5px; border:1px #ddd solid;"></div>&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="4" align="left">联系方式（如联系方式有变动请及时修改，以便能及时联系到你。谢谢！）</td>

                    </tr>
                    <tr>
                        <td align="right">手机号码：</td>
                        <td><?php echo $_SESSION['stel']?></td>
                        <td align="right">第二联系号码：</td>
                        <td><?php echo $_SESSION['stel2']?></td>

                    </tr>
                    <tr>
                        <td align="right">QQ:</td>
                        <td><?php echo $_SESSION['sqq']?></td>
                        <td align="right">电子邮箱：</td>
                        <td><?php echo $_SESSION['email']?>&nbsp;</td>

                    </tr>
                    <tr>
                        <td align="right">联系地址：</td>
                        <td colspan="4"><?php echo $_SESSION['sdizhi']?></td>
                    </tr>
                    <tr align="center">
                        <td colspan="5" height="40">
                            <div align="center">

                                <input type="button" id="button2" value="联系方式有修改" onclick="submitMail()" class="input2" />
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    
    <script>
        function submitMail() {
            location = "changeInfo.php";
        }
    </script>
    
    <div class="footer">
        <p>
            &copy;copyright 2017 tanpeng.net 版权所有</p>
    </div>
</div>
</body>
</html>
