<?php
require_once '../dao/comment.php';
session_start();
$id_user = $_SESSION['users']['id'];
$id = $_POST['id'];
$content =$_POST['content'];
$date_on=date("Y-m-d");
// var_dump($date_on);die;
comment_insert($id_user,$id,$date_on,$content);
header('location:'.$_SERVER['HTTP_REFERER']);
?>