<?php
session_start();
include('./connect.php');
function filter($input){
  $input = stripslashes($input);
  return htmlspecialchars(trim($input));
}
if(
  !empty($_POST['login'])&&
  !empty($_POST['password'])){
  $login = filter($_POST['login']);
  echo $login;
  $password = filter($_POST['password']);
  echo $password;
  $sql="SELECT login, password FROM user WHERE login = '$login' AND password = '$password'";
  $data=mysqli_query($connect,$sql);
  var_dump($data);
    $_SESSION['logged'] = true;
    $_SESSION['login'] = $login;
    $type=mysqli_query($connect,"select type from user where login = $login");
    echo $type;
     switch($type){
       case "student":
       header("Location: ../home.php");
       break;
       case "teacher":
       header("Location: ../teacher.php");
       break;
       case "admin":
       header("Location: ../quiz.php");
       break;
     }
   }
   mysqli_close($connect);
 ?>
