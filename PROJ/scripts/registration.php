<?php
include('../scripts/connect.php');
function filter($input){
  $input = stripslashes($input);
  return htmlspecialchars(trim($input));
}
if(
  !empty($_POST['login'])&&
  !empty($_POST['password1'])&&
  !empty($_POST['acc_type'])&&
  !empty($_POST['name'])&&
  !empty($_POST['surname'])
){
$login = filter($_POST['login']);
$name = filter($_POST['name']);
$surname = filter($_POST['surname']);
$type = filter($_POST['acc_type']);
$password = filter($_POST['password1']);
$password2= filter($_POST['password2']);
if($password!=$password2){
  ?>
  <script type="text/javascript">
    alert("Hasła się nie zgadzają");
  </script>
  <?php
    header("Location: ../register.php");
}
else{
  if (mysqli_num_rows(mysqli_query($connect,"SELECT login FROM user WHERE login = '".$login."';")) ==0){
    ?>
    <script type="text/javascript">
      alert("Login jest już zajęty");
    </script>
    <?php
    header("Location: ../register.php");
  }
  else{
    mysqli_query($connect,"INSERT INTO `user` (`login`, `password`, `type`, `name`, `surname`) VALUES ('$login', '$password', '$type', '$name', '$surname')");

    ?>
    <script type="text/javascript">
      alert("Konto zostało utworzone");
    </script>
    <?php
    header("Location: ../index.php");
  }
}
}
else {
header("Location: ../register.php");
}
 ?>
