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
  $hash = password_hash(filter($_POST['password']),PASSWORD_ARGON2I);
  $sql="SELECT id_user,login, password,type FROM user WHERE login = '$login'";
  $data=mysqli_query($connect,$sql);
  $row=  mysqli_fetch_assoc($data);
  if(password_verify($row['password'],$hash)){
    $_SESSION['logged'] = true;
    $_SESSION['id'] = $row['id_user'];
    $_SESSION['type']=$row['type'];
    $type=$_SESSION['type'];
     switch($type){
       case "student":
       header("Location: ../home.php");
       break;
       case "teacher":
       header("Location: ../teacher.php");
       break;
       case "admin":
       header("Location: ../user_a.php");
       break;
     }
   }
   else{
     ?>
     <script type="text/javascript">
       alert("Niepoprawne dane");
     </script>
     <?php
       header("refresh:3;../register.php");
   }
 }
   else{
     ?>
     <script type="text/javascript">
       alert("Niepoprawne dane");
     </script>
     <?php
     header("Location: ../index.php");
   }
   mysqli_close($connect);
 ?>
