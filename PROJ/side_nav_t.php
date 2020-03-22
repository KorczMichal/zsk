<?php
include('./scripts/connect.php');
$id= $_SESSION['id'];
$sql="SELECT * from class where teacher='$id'";
$result=mysqli_query($connect,$sql);
$url=$_SERVER['REQUEST_URI'];
 ?>
<div class="navbar bg-info flex-column text-dark navbar-dark d-flex flex-column justify-content-start" >
<div class="d-flex-inline">
  <h4>Klasa</h4>
  <form class="" method="post">
    <button type="submit" name="add_class">Dodaj</button>
  </form>

  <?php
  if(isset($_POST['add_class'])){
 echo <<<ADDCLASS
 <form class="" action="./scripts/add_class.php?url=$url" method="post">
   <input type="text" name="class_name" value="">;
   <button type="submit" name="button">Zatwierdź</button>
 </form>
ADDCLASS;
  }
   ?>
</div>

<ul class="navbar-nav" >
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
    echo <<<LI
    <li class="nav-item">
    <a class="nav-link" href="./teacher.php?class_id=$row[id_class]" ">
             $row[name]
    </a>
    </li>
    LI;
  } ?>
  </ul>

   <form class="" method="post">
     <button type="submit" name="delete_class">Usuń klasę</button>
   </form>

   <?php
   if(isset($_POST['delete_class'])){
  echo <<<DELCLASS
  <form class="" action="./scripts/delete_class.php?url=$url" method="post">
    <input type="text" name="del_class" value="" placeholder>;
    <button type="submit" name="button">Usuń</button>
  </form>
 DELCLASS;
   }
    ?>
  <h5>Uczniowie</h5>
  <form class=""  method="post">
    <button type="submit" name="add_student">Dodaj ucznia</button>
  </form>

  <?php
  if (isset($_POST['add_student']) && isset($_GET['class_id'])) {
    $class_id=$_GET['class_id'];
    echo <<<STUDENT
    <form class="" action="./scripts/add_student.php?url=$url&class_id=$class_id" method="post">
      <input type="number" name="student_id" value=""><label for="student_id">Podaj id ucznia</label>
      <button type="submit" name="confirm">Potwierdź</button>
    </form>
    STUDENT;
  }
 ?>
  <ul class="navbar-nav" >
    <?php
    if(isset($_GET['class_id'])){
      $class_id=$_GET['class_id'];
    $sql="SELECT user.id_user,name,surname from user join student_class on student_class.id_user=user.id_user where id_class=$class_id";
    $result=mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
      echo <<<LI
      <li class="nav-item">
      <a class="nav-link"" ">
              Id: $row[id_user] | $row[name] $row[surname]
      </a>
      </li>
      LI;
    }}
     ?>
    </ul>

   <form class=""  method="post">
     <button type="submit" name="del_student">Usuń ucznia</button>
   </form>

   <?php
   if (isset($_POST['del_student'])) {
     echo <<<DELSTUDENT
     <form class="" action="./scripts/delete_student.php?url=$url&class_id=$class_id" method="post">
       <input type="number" name="del_student" value=""><label for="student_id">Podaj id ucznia</label>
       <button type="submit" name="confirm">Potwierdź</button>
     </form>
     DELSTUDENT;
   }
  ?>
</div>
<?php mysqli_close($connect); ?>
