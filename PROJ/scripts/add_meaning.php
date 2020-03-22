<?php
include('./connect.php');
$new_meaning=$_POST['new_meaning'];
$id_word=$_GET['id_word'];
$sql = " INSERT INTO `word_pol` (`id_pol`, `word`) VALUES (NULL, '$new_meaning')";
$result1=mysqli_query($connect,$sql);
$sql = "SELECT id_pol from word_pol where word like '$new_meaning'";
$result2=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result2);
$id_pol=$row['id_pol'];
echo $id_pol;
$sql="INSERT INTO `word_meaning` (`Id_eng`, `Id_pol`) VALUES ('$id_word', '$id_pol'); ";
$result3=mysqli_query($connect,$sql);
echo $result3;
header("Location:".$_GET['url']);
mysqli_close($connect);
 ?>
