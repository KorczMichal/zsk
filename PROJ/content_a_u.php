<?php
$url=$_SERVER['REQUEST_URI'];
 ?>
<div class="container bg-info">
<h2>Lista użytkowników</h2>
<form class="form d-flex-inline" method="post">
  <input type="number" name="id_s" value="" placeholder="Id">
  <button type="submit" name="find">Znajdź</button>
</form>
<div class="cotainer bg-light">
  <table class="table">
    <tr>
      <th>Id</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Typ</th>
      <th>Login</th>
      <th>Hasło</th>
    </tr>
<?php
if(!empty($_POST['id_s'])){
$id_s=$_POST['id_s'];
$sql="SELECT * from user where Id_user=$id_s";
$result=mysqli_query($connect,$sql);
while ($row=mysqli_fetch_assoc($result)) {
  echo <<<USER
  <tr>
  <td>$row[id_user]</td>
  <td>$row[name]</td>
  <td>$row[surname]</td>
  <td>$row[type]</td>
  <td>$row[login]</td>
  <td>$row[password]</td>
  <td><a href="./scripts/delete_user_a.php?id_user=$row[id_user]&url=$url">Usuń</a></td>
  </tr>
USER;
}
}
else{
$sql="SELECT * from user";
$result=mysqli_query($connect,$sql);
while ($row=mysqli_fetch_assoc($result)) {
  echo <<<USER
  <tr>
  <td>$row[id_user]</td>
  <td>$row[name]</td>
  <td>$row[surname]</td>
  <td>$row[type]</td>
  <td>$row[login]</td>
  <td>$row[password]</td>
  <td><a href="./scripts/delete_user_a.php?id_user=$row[id_user]&url=$url">Usuń</a></td>
  </tr>
USER;
}
}?>
    </table>
</div>
</div>
