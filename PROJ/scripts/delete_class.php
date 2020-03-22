<?php
session_start();
include('./connect.php');
$id= $_SESSION['id'];
$class_name=$_POST['class_name'];
echo $class_name;
$sql = "DELETE FROM `class` WHERE class.name like $class_name and teacher=$id";
$result=mysqli_query($connect,$sql);
echo $result;
//header("Location:".$_GET['url']);
 ?>
