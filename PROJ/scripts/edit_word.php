<?php
include('./connect.php');
$new_word=$_POST['new_word'];
$id_word=$_GET['id_word'];
$sql = "UPDATE `word_eng` SET `word` = '$new_word' WHERE `word_eng`.`id_eng` = $id_word";
$result=mysqli_query($connect,$sql);
header("Location:".$_GET['url']);
mysqli_close($connect);
 ?>
