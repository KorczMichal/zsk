<?php
session_start();
include('./connect.php');
$id= $_POST['del_student'];
$class_id=$_GET['class_id'];
$sql="SELECT type from user where id_user=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
if($row['type']=='student'){
$sql = "DELETE from `student_class` where id_class=$class_id and id_user=$id";
$result=mysqli_query($connect,$sql);
echo $result;
}
header("Location:".$_GET['url']);
 ?>
