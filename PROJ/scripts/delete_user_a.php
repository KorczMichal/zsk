<?php
session_start();
include('./connect.php');
$id= $_GET['id_user'];
$url=$_GET['url'];
$sql="DELETE from user where id_user=$id";
$result=mysqli_query($connect,$sql);
header("Location:".$url);
 ?>
