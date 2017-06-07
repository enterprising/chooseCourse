<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/6
 * Time: 11:29
 */
    session_start();
    $cid = $_GET['cid'];
    echo "cid=".$cid;
    $sid = $_GET['sid'];
    echo "sid=".$sid;
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');
    $n = $db->query("insert into cc(sid,cid) VALUES($sid,$cid)");
    $db->query("update course set course.cyixuan+1 WHERE cid=$cid");

    if((int)$n>0){
        echo "选课成功！";
    }else{
        echo "选课失败！";
    }