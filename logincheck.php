<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <script src="layer/layer.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>

</head>
<body>
<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2017/6/5
     * Time: 9:20
     */
    session_start();
    $name = file_get_contents("php://input");
    echo $name;
    parse_str($name, $data);
    var_export($data);
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');
    /*$rs = $db->query('select * from student');
    print_r($rs->fetchall(PDO::FETCH_ASSOC));*/
    $username = $data['username'];
    $shenfen = $data['shenfen'];
    $password = $data['password'];
    $yzm = $data['yzm'];
    echo "xxx" . $_SESSION["helloweba_num"];
    echo "yzm=" . $yzm;
    if ($_SESSION["helloweba_num"] != $yzm) {
        echo "<script>";
        echo "alert(\"验证码输入有误，请重新登录\");";
        echo "location.href=\"login.php\"";
        echo "</script>";
    }
    if ($shenfen == "student") {
        $rs = $db->query("select * from student WHERE sid='$username' and spassword='$password'");
        $num_rows = $rs->rowCount();
        if ($num_rows > 0) {
            echo "登录成功";
            session_start();
            $rs2 = $db->query("select sname,semail,stel,stel2,sqq,stx,sdizhi from student WHERE sid = '$username'");
            $jieguo = $rs2->fetch();
            $xingming = $jieguo['sname'];
            $email = $jieguo['semail'];
            $stel = $jieguo['stel'];
            $stel2 = $jieguo['stel2'];
            $sqq = $jieguo['sqq'];
            $stx = $jieguo['stx'];
            $sdizhi = $jieguo['sdizhi'];
            $_SESSION['xuehao'] = $username;
            $_SESSION['username'] = $xingming;
            $_SESSION['email'] = $email;
            $_SESSION['stel'] = $stel;
            $_SESSION['stel2'] = $stel2;
            $_SESSION['sqq'] = $sqq;
            $_SESSION['stx'] = $stx;
            $_SESSION['sdizhi'] = $sdizhi;
            header('location:index2.php');
        } else {
            echo "<script>";
            echo "alert(\"错误的用户名或者密码，请重新登录\");";
            echo "location.href=\"login.php\"";
            echo "</script>";
        }
    }else{
        echo "教师";
        $rs = $db->query("select * from teacher WHERE tid='$username' and tpassword='$password'");
        $num_rows = $rs->rowCount();
        if ($num_rows > 0) {
            echo "登录成功";
            $rs2 = $db->query("select tname from teacher WHERE tid = '$username'");
            $jieguo = $rs2->fetch();
            $xingming = $jieguo['tname'];

            $_SESSION['tid'] = $username;
            echo "tid=".$username;
            $_SESSION['tname'] = $xingming;

            header('location:teacherMain.php');
        } else {
            echo "<script>";
            echo "alert(\"错误的用户名或者密码，请重新登录\");";
            echo "location.href=\"login.php\"";
            echo "</script>";
        }
    }
?>
</body>
</html>
