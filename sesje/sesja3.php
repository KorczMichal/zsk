<?php session_start();
$_SESSION['name'] = "Janusz";
unset($_SESSION['name']);
session_destroy();
?>
<!doctype html>
<html>
<head></head>
<body>
<p>Strona 3</p>
<p>Witamy

<?php

echo $_SESSION['name'];

?>
na stronie!</p>


<?php
echo "Identyfikator sesji: ",session_id();
?>
    <br><a href="./sesja1.php">Strona startowa</a>
</body>
</html>
