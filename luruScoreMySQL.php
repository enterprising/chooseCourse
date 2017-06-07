<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/7
 * Time: 10:15
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

    $cname = $data['cname'];
    $sname = $data['sname'];
    $score = $data['score'];

    $n = $db->query("insert into cc(sid,cid,score) VALUES('$sid','$cid','$score')");
    if ((int)$n > 0) {
        echo "<script>";
        echo "alert(\"成绩录入成功！\");";
        echo "location.href=\"teacherMain.php\"";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert(\"成绩录入失败！\");";
        echo "location.href=\"#\"";
        echo "</script>";
    }