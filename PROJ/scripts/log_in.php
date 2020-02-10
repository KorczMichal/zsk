<?php
session_start();
include('connect.php');
function filter($input){
  $input = stripslashes($input);
  return htmlspecialchars(trim($input));
}
    if (mysqli_num_rows($connect,mysqli_query($connect,"SELECT login, haslo FROM user WHERE login = '".$login."' AND haslo = '".md5($haslo)."';")) > 0){
    $_SESSION['logged'] = true;
    $_SESSION['login'] = $login;
     if(mysqli_query($connect,"select type from user"))header("Location: ../register.php");
    }
    else{header("Location: ../register.php");}
 ?>
