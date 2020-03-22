<?php
include('./connect.php');
$new=$_POST['add_word'];
$class_id=$_GET['class_id'];
$sql = "INSERT INTO `word_eng` (`id_eng`, `word`) VALUES (NULL, '$new')";
$result=mysqli_query($connect,$sql);
$sql = "SELECT id_eng from word_eng where word like  '$new'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$word_id=$row['id_eng'];
$sql="INSERT INTO `class_word` (`id_class`, `id_word`) VALUES ('$class_id', '$word_id')";
$result=mysqli_query($connect,$sql);
header("Location:".$_GET['url']);
 ?>
