<?php
include '../scripts/connect.php';
function filter($input){
  $input = stripslashes($input);
  return mysqli::real_escape_string(htmlspecialchars(trim($input)));
}
if(
  isset($_POST['reg'])&&
  !empty($_POST['login'])&&
  !empty($_POST['password1'])&&
  !empty($_POST['type'])
){
$login = filter($_POST['login']);
$password1= filter($_POST['password1']);
$password2= filter($_POST['password2']);
if($password1!=$password2){
  ?>
  <script type="text/javascript">
    alert("Hasła się nie zgadzają")
  </script>
  <?php
}
}
 ?>
