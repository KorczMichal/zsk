<?php
session_start();
include('./connect.php');
$id= $_SESSION['id'];
$class_name=$_POST['class_name'];
$sql = "INSERT INTO `class` (`id_class`, `teacher`, `name`) VALUES (NULL,'$id' , '$class_name')";
$result=mysqli_query($connect,$sql);
header("Location:".$_GET['url']);
 ?>
