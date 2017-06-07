<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/6
 * Time: 23:43
 */

    session_start();
    $sid = $_SESSION['xuehao'];
    //echo "sid".$sid;
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');
    $cou = $db->query("select cid,cscore from cc WHERE sid = $sid ");

    $courses = $cou->fetchAll();
    foreach ($courses as  $row){
        $cid = $row['cid'];
        $rs2 = $db->query("select cname from course WHERE cid = $cid");
        $rs3 = $rs2->fetch();
        $cname = $rs3['cname'];
        echo "课程：".$cname;
        echo "分数：".$row['cscore'];
        echo "<br/>";
    }


    //header('location:DelmyCoursesCore_Bef.php');