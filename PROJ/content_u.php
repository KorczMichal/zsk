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
  <p>Id:
<?php
echo $row['id_user'];
 ?>
  </p>
  <p>Login: <?php echo $row['login'] ?></p>
  <form class="" method="post">
    <button type="submit" name="password">Pokaż hasło</button>
  </form>
  <p>Hasło:
  <?php if(isset($_POST['password'])){
    echo $row['password'];
  } ?>
  </p>
  <p>Typ:
<?php
echo $row['type'];
 ?>
  </p>
<p>Imię:
<?php
echo $row['name']; ?>
 </p>
<p>Nazwisko:
<?php
echo $row['surname'];
 ?>
</p>
</div>
<div class="row">

<div class="col-10">

</div>
<form class="col-2" action="./scripts/delete_user.php" method="post">
<button class="" type="submit" name="delete">Usuń konto</button>
</form>
</div>
</div>
