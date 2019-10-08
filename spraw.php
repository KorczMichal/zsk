<?php

if(!empty($_POST['name']) && !empty($_POST['age'])){
$name= $_POST['name'];
$age= $_POST['age'];
$name2 = trim($name);
echo "Przed zmianą $name<br>Po zmianie $name2";
}
?>
