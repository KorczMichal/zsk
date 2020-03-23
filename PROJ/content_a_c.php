<?php
$url=$_SERVER['REQUEST_URI'];
 ?>
<div class="container bg-info">
<h2>Lista klas</h2>
<form class="form d-flex-inline" method="post">
  <input type="number" name="id_c" value="" placeholder="Id klasy">
  <button type="submit" name="find_c">Znajdź</button>
</form>
<form class="form d-flex-inline" method="post">
  <input type="number" name="id_t" value="" placeholder="Id nauczyciela">
  <button type="submit" name="find_t">Znajdź</button>
</form>
<div class="cotainer bg-light">
  <table class="table">
    <tr>
      <th>Id</th>
      <th>Nazwa</th>
      <th>Nauczyciel</th>
      <th>Uczniowie</th>
    </tr>
<?php
$sql="SELECT * from class";
if(!empty($_POST['id_c'])){
$id_class=$_POST['id_c'];
$sql="SELECT * from class where id_class=$id_class";
}
if(!empty($_POST['id_t'])){
$id_teacher=$_POST['id_t'];
$sql="SELECT * from class where teacher=$id_teacher";
}
$result=mysqli_query($connect,$sql);
while ($row=mysqli_fetch_assoc($result)) {
  echo <<<USER
  <tr>
  <td>$row[id_class]</td>
  <td>$row[name]</td>
USER;
$sql1="SELECT id_user,name,surname from user where id_user=$row[teacher]";
$result1=mysqli_query($connect,$sql1);
$row1=mysqli_fetch_assoc($result1);
echo "<td>$row1[id_user] $row1[name] $row1[surname]</td>";

$id_class=$row['id_class'];
$sql2="SELECT user.id_user,name,surname from user join student_class on user.id_user=student_class.id_user where id_class=$id_class";
$result2=mysqli_query($connect,$sql2);
echo "<td>";
while($row2=mysqli_fetch_assoc($result2)){
  echo "$row2[id_user] $row2[name] $row2[surname]<br>";
}
echo "</td>";
echo  "<td><a href=\"./scripts/delete_class_a.php?id_class=$row[id_class]&url=$url\">Usuń klasę</a></td>";
echo  "</tr>";
}
?>
    </table>
</div>
</div>
