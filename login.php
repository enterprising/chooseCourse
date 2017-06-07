<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Minimal and Clean Sign up / Login and Forgot Form by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FreeHTML5.co"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="layer/layer.js"></script>


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="style-3">

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="menu">
               <span style="font-family: 微软雅黑;font-size: 22px;font-weight:bold;">欢迎使用网上选课系统</span>
            </ul>
        </div>
    </div>
    <div class="row">

        <div class="col-md-3 ">
            <img src="images/Always.jpg" alt="" style="width: 500px;height: 400px;margin-top: 100px;margin-left: 60px;"/>
        </div>
        
        
        <div class="col-md-4 col-md-push-5">
            
            <!-- Start Sign In Form -->
            <form method="post" action="logincheck.php" class="fh5co-form animate-box" data-animate-effect="fadeInRight" onsubmit="return checklogin()">
                <h2>用户登录</h2>
                <div class="form-group">
                    <label for="username" class="">用户名</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password" class="">密码</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" onfocus="this.type='password'">
                </div>
                <div class="form-group">
                    <label for="shenfen" class="">选择身份：</label>
                    <select name="shenfen" size="1" style="margin-left: 0px;width: 100px;">
                        <option value="student">学生</option>
                        <option value="teacher">教师</option>
                    </select>
                </div>
                <div class="form-group">
                    <span  class="">验证码：</span><br/>
                    <input type="text" class="" id="yzm" name="yzm" placeholder="验证码" autocomplete="off" style="margin-left: 2px;width:110px; height:30px;margin-top: 16px;" >

                    <img id="captcha_img" border='1' src='captcha.php?r=echo rand();' style="width:100px; height:30px;margin-left: 15px;padding-top: -2px; " />

                    <a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()" style="width:100px; height:30px;margin-left: 5px;">换一个</a>
                </div>
                <div class="form-group">
                    <label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
                </div>
                <div class="form-group">
                    <p>没有帐号？ <a href="sign-up.php">注册</a>&nbsp;|&nbsp;忘记密码？<a href="forgot.html">找回密码</a>
                    </p>
                </div>
                <div class="form-group">
                    <input type="submit" value="登录" class="btn btn-primary">
                </div>
            </form>
            <!-- END Sign In Form -->
            
        </div>
    </div>
    <div class="row" style="padding-top: 60px; clear: both;">
        <div class="col-md-12 text-center">
            <p>
                <small>&copy; All Rights Reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank"
                                                                     title="模板之家">xxx</a> - Collect from <a
                            href="http://www.cssmoban.com/" title="网页模板" target="_blank">xxx</a></small>
            </p>
        </div>
    </div>
</div>

<script >
    function checklogin() {
        var name = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var yzm = document.getElementById("yzm").value;
        if (name == "" || name.length == 0) {
            layer.alert("学号不能为空！");
            return false;
        }
        if(password ==""||password.length==0){
            layer.alert("密码不能为空！");
            return false;
        }
        if(yzm =="" ||yzm.length==0){
            layer.alert("请输入验证码！");
            return false;
        }
        else {
            return true;
        }
    }
</script>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Placeholder -->
<script src="js/jquery.placeholder.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>

