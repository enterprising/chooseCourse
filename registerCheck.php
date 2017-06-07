<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5
 * Time: 15:25
 */


    $name = file_get_contents("php://input");
    echo $name;
    parse_str($name, $data);
    var_export($data);
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');
    /*$rs = $db->query('select * from student');
    print_r($rs->fetchall(PDO::FETCH_ASSOC));*/

    $username = $data['name'];
    $email = $data['email'];
    $password = $data['password'];
    $n = $db->query("insert into student(sname,spassword,semail) VALUES('$username','$password','$email')");
    if ((int)$n > 0) {
        echo "注册成功！";
    } else {
        echo "<script>";
        echo "alert(\"注册失败！\");";
        echo "location.href=\"sign-up.php\"";
        echo "</script>";
    }
?>