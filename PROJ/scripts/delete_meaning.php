<?php
include('./connect.php');
$id_word=$_GET['id_word'];
$sql="DELETE FROM `word_pol` WHERE `word_pol`.`id_pol` = $id_word";
$result=mysqli_query($connect,$sql);
header("Location:".$_GET['url']);
mysqli_close($connect);
 ?>
