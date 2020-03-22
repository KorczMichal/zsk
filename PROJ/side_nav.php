<?php
include('./scripts/connect.php');
$id= $_SESSION['id'];
$sql="SELECT * from class join student_class on class.id_class=student_class.id_class where student_class.id_user='$id'";
$result=mysqli_query($connect,$sql);
$url=$_SERVER['REQUEST_URI'];
?>
<div class="navbar bg-info flex-column text-dark navbar-dark d-flex flex-column justify-content-start" >
<h4>Klasa</h4>
<ul class="navbar-nav" >
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
    echo <<<LI
    <li class="nav-item">
    <a class="nav-link" href="./home.php?class_id=$row[id_class]" ">
             $row[name]
    </a>
    </li>
    LI;
  } ?>
</li>
</div>
</ul>
