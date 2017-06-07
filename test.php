<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/5
 * Time: 9:28
 */
$db = new PDO('mysql:dbname=chooseclass','root', 'admin');
$db->query('set names utf8');
$rs = $db->query('select * from student');
print_r($rs->fetchall(PDO::FETCH_ASSOC));