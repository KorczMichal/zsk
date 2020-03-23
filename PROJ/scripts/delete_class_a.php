<?php
include('./connect.php');
$url=$_GET['url'];
$id_class=$_GET['id_class'];
$sql="DELETE from class where id_class=$id_class";
$result=mysqli_query($connect,$sql);
header("Location:".$_GET['url']);
 ?>
