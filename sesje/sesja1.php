<?php session_start();
$_SESSION['name'] = "Janusz";



?>
<!doctype html>
<html>
<head></head>
<body>
<p>Strona startowa</p>
<p>Witamy

<?php

echo $_SESSION['name'];

?>
na stronie!</p>


<?php
echo "Identyfikator sesji: ",session_id();
?>
    <br><a href="./sesja2.php">Strona 2</a>
</body>
</html>
