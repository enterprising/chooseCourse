<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/6
 * Time: 22:58
 */
    session_start();
    /* $name = file_get_contents("php://input");
     echo $name;
     parse_str($name, $data);
     var_export($data);*/
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');
    $sid = $_SESSION['xuehao'];
    $rs = $db->query("select cid from cc WHERE sid = $sid");
    $cids = $rs->fetchAll();
    //print_r($cids);
    $cidss = array();
    if(!empty($cids)){
        foreach ($cids as $row){
            $cidItem = $row['cid'];
            $cidss[] = $cidItem;
        }
    }
    $myCourses = array();
    foreach ($cidss as $row) {
        $cou = $db->query("select * from course WHERE cid = $row");
        //print_r($cou->fetchAll());
        $cour = $cou->fetchAll();
        if(!empty($cour)){
            $myCourses[] = $cour[0];
        }
    }
    /*foreach ($myCourses as $row2) {
        print_r($row2);
        echo "<br/>";
        echo "<br/>";
    }*/

    $_SESSION['$myCourses'] = $myCourses;
    header('location:DelmyCourses.php');