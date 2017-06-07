<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2017/6/6
     * Time: 8:35
     */
    session_start();
    $name = file_get_contents("php://input");
    echo $name;
    parse_str($name, $data);
    var_export($data);
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');

    $rs = $db->query('select * from student');
    print_r($rs->fetchall(PDO::FETCH_ASSOC));

    $stel = $data['stel'];
    $stel2 = $data['stel2'];
    $sqq = $data['sqq'];
    $semail = $data['email'];
    $sdizhi = $data['sdizhi'];
    $sid = $_SESSION['xuehao'];
    $n = $db->query("update student set stel='$stel',stel2='$stel2',sqq='$sqq',semail='$semail',sdizhi='$sdizhi' WHERE sid='$sid'");
    if((int)$n>0){
        $_SESSION['email'] = $semail;
        $_SESSION['stel'] = $stel;
        $_SESSION['stel2'] = $stel2;
        $_SESSION['sqq'] = $sqq;
        $_SESSION['sdizhi'] = $sdizhi;
        echo "<script>";
        echo "alert(\"修改信息成功！\");";
        echo "location.href=\"userinfo.php\"";
        echo "</script>";
    }else{
        echo "修改失败！";
    }
?>
