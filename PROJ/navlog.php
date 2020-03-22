<?php
session_start();
include('./scripts/connect.php');
$id=$_SESSION['id'];
$sql="SELECT id_user,name,surname FROM `user` where id_user = '$id' ";
$result= mysqli_query($connect,$sql);
$row= mysqli_fetch_assoc($result);
 ?>
<nav class="navbar-expand-xl|lg|md|sm bg-info navbar-cyan sticky-top d-flex">
<div class="nav nav-item p-2 bg-dark">
  <a class="navbar-brand" >
      <img class="logo" src="logo.png" alt="Logo" style="width: 10em;">
  </a>
</div>
<div class="nav nav-item ml-auto p-2 bg-dark ">
  <ul class="navbar-nav" >
  <li class="nav-item dropdown flex">
  <a class="nav-link dropdown-toggle text-decoration-none text-white" href="#account"  data-toggle="dropdown">
           <?php
           echo $row['name']." ".$row['surname'];
            ?>
  </a>
  <div class="dropdown-menu">
          <a class="dropdown-item" href="user.php">Ustawienia</a>
          <a class="dropdown-item" href="scripts/log_out.php">Wyloguj</a>
        </div>
  </li>
  </form>
</div>
</nav>
