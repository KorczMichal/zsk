<?php
$type=$_SESSION['type'];
 ?>
<div class="container-fluid p-0 m-0">
  <div class="row d-flex p-0 ">
  <div class="col-2 p-1 "><?php
  if($type=='student'){include 'side_nav.php';}
  if($type=='teacher'){include 'side_nav_t.php';}
    ?></div>
  <div class="col-10 p-1"><?php include 'content_u.php' ?></div>
  </div>
</div>
