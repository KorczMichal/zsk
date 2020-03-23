<?php
session_start();
include('./connect.php');
$id= $_SESSION['id'];
$sql="DELETE from user where id_user=$id";
$result=mysqli_query($connect,$sql);
header("Location:../index.php");
 ?>
