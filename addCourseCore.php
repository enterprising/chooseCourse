<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/7
 * Time: 8:39
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

    $cname = empty($data['cname'])?"":$data['cname'];
    $ctime = empty($data['ctime'])?"":$data['ctime'];
    $cteacher = empty($_SESSION['tid'])?"":$_SESSION['tid'];
    $cdep =empty( $data['cdep']?"": $data['cdep']);
    $cmax = empty($data['cmax'])?"":$data['cmax'];
    $cxuefen =empty( $data['cxuefen'])?"": $data['cxuefen'];
    $cxueshi =empty( $data['cxueshi'])?"": $data['cxueshi'];
    $cdidian = empty($data['cdidian'])?"":$data['cdidian'];

    echo "cteacher=".$cteacher;

    $n = $db->query("insert into course(cname,cteacher,ctime,cdep,cmax,cxuefen,cxueshi,cdidian) VALUES('$cname','$cteacher','$ctime','$cdep','$cmax','$cxuefen','$cxueshi','$cdidian')");
    if ($n > 0) {
        echo "<script>";
        echo "alert(\"新增成功！\");";
        echo "location.href=\"teacherMain.php\"";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert(\"新增失败！\");";
        echo "location.href=\"#\"";
        echo "</script>";
    }
?>