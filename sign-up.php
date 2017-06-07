<!DOCTYPE html>
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
                欢迎使用网上选课系统
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 col-md-push-2">


            <!-- Start Sign In Form -->
            <form method="post" action="registerCheck.php" class="fh5co-form animate-box" data-animate-effect="fadeInRight" onsubmit="return check()" >
                <h2>注册</h2>
                <div class="form-group">
                    <div class="alert alert-success" role="alert">Your info has been saved.</div>
                </div>
                <div class="form-group">
                    <label for="name" class="">姓名：</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password" class="">密码：</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off"
                           onfocus="this.type='password'">
                </div>
                <div class="form-group">
                    <label for="re-password" class="">再次输入密码：</label>
                    <input type="text" class="form-control" id="re_password" placeholder="Re-type Password"
                           autocomplete="off" onfocus="this.type='password'" onblur="checkpas()">
                    <label id="tishi" style="display: none;color: red;">两次密码输入不一致</label>
                    <label id="tishi2" style="display: none;color: green;">√ 两次密码一致</label>
                </div>
                <div class="form-group">
                    <label for="email" class="">邮箱：</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
                </div>
                <div class="form-group">
                    <p>Already registered? <a href="login.php">登录</a></p>
                </div>
                <div class="form-group">
                    <input type="submit" id="zhuce" value="注册" class="btn btn-primary">
                </div>
            </form>
            <!-- END Sign In Form -->


        </div>
    </div>
    <div class="row" style="padding-top: 60px; clear: both;">
        <div class="col-md-12 text-center">
            <p>
                <small>&copy; All Rights Reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank"
                                                                     title="模板之家">模板之家</a> - Collect from <a
                        href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></small>
            </p>
        </div>
    </div>
</div>
<script>
    function checkpas() {
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("re_password").value;
        if(password!=repassword){
            document.getElementById("tishi").style.display = "block";
            document.getElementById("tishi2").style.display = "none";
        }else{
            document.getElementById("tishi").style.display = "none";
            document.getElementById("tishi2").style.display = "block";
        }
    }

    function check() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("re_password").value;
        console.log(name);
        if (name == "" || name.length == 0) {
            layer.alert("用户名不能为空！");
            return false;
        }
        if(email ==""||email.length==0){
            layer.alert("邮箱不能为空！");
            return false;
        }
        if(password ==""||password.length==0||repassword==""||repassword.length==0){
            layer.alert("密码不能为空！");
            return false;
        }
        if(document.getElementById("tishi").style.display=="block"){
            layer.alert("两次密码输入不一致，请重新输入！");
            return false;
        }
        else {
            return true;
        }
    }
</script>

<!-- jQuery -->
<!--<script src="js/jquery.min.js"></script>-->
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

