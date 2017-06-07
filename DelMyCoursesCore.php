<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/6
 * Time: 23:26
 */
    session_start();
    $sid = $_GET['sid'];
    $cid = $_GET['cid'];
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');
    $cou = $db->query("delete from cc WHERE sid = $sid AND cid = $cid");
    header('location:DelmyCoursesCore_Bef.php');