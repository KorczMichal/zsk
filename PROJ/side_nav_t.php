<?php
include('./scripts/connect.php');
$id= $_SESSION['id'];
$sql="SELECT * from class where teacher='$id'";
$result=mysqli_query($connect,$sql);

 ?>
<div class="navbar bg-info flex-column text-dark navbar-dark d-flex flex-column justify-content-start" >
<div class="d-flex-inline">
  <h4>Klasa</h4>
  <button type="button" name="button">Dodaj</button>
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
</div>
</ul>
<?php mysqli_close($connect); ?>
