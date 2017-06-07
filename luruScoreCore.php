<?php

    session_start();
    include("db/db_properties.php");
    $db = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
    $db->query('set names utf8');
    $tid = $_SESSION['tid'];
    //根据老师ID查找课程名
    $rs = $db->query("select cname,cid from course WHERE cteacher = $tid");
    $result = $rs->fetchAll();
    $chengji = array();
    if(!empty($result)){
        $chengjirow = array();
       foreach ($result as $row){
           $cname = $row['cname'];
           $cid = $row['cid'];
           $chengjirow['cname'] = $cname;
           //echo $cname;
           //echo "cid=".$cid;
           //根据cc表查找sid
           $db2 = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
           $sids = $db2->query("select sid from cc WHERE cid = $cid");
           //print_r($sids->fetchAll());
           if(!empty($sids)){
               $sidss = $sids->fetchAll();
               //print_r($sidss);
              foreach ($sidss as $row2){
                   $sid2 = $row2['sid'];
                   echo "sid".$sid2;
                   $db3 = new PDO('mysql:dbname=' . $DB_NAME, $DB_LOGIN, $DB_PASSWORD);
                   $sname = $db3->query("select sname from student WHERE sid = $sid2");
                   $sss = $sname->fetch();
                   $chengjirow['sname'] = $sss['sname'];
                   echo "姓名：".$chengjirow['sname'];
               }
           }
          $chengji[] = $chengjirow;
       }
    }
    $_SESSION['chengji'] = $chengji;
    header('location:luruScore.php')
?>