<?php
include('./connect.php');
$new_word=$_POST['new_word'];
$id_word=$_GET['id_word'];
$sql = "UPDATE `word_pol` SET `word` = '$new_word' WHERE `word_pol`.`id_pol` = $id_word";
$result=mysqli_query($connect,$sql);
header("Location:".$_GET['url']);
mysqli_close($connect);
 ?>
