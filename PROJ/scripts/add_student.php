<?php
session_start();
include('./connect.php');
$id= $_POST['student_id'];
$class_id=$_GET['class_id'];
$sql="SELECT type from user where id_user=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
if($row['type']=='student'){
$sql = "INSERT INTO `student_class` (`id_class`, `id_user`) VALUES ($class_id,$id )";
$result=mysqli_query($connect,$sql);
}
header("Location:".$_GET['url']);
 ?>
