<?php
include('./scripts/connect.php');
$id= $_SESSION['id'];
$sql="SELECT * from user where id_user = $id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
 ?>
<div class="container bg-info">
<div class="container row">
  <h2 class="col-10">Panel użytkownika</h2>

</div>
<div class="bg-light" >
  <p>Login: <?php echo $row['login'] ?></p>
  <form class="" method="post">
    <button type="submit" name="password">Pokaż hasło</button>
  </form>
  <?php if(isset($_POST['password'])){
    echo "Hasło: ".$row['password'];
  } ?>
  <p>Status aktywne</p>
  <p>Adres e-mail: example@gmail.com</p>
</div>
<div class="col-10">

</div>
<button class="col-2" type="button" name="delete">Usuń konto</button>
</div>
