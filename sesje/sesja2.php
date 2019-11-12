<?php
session_start();
?>
<!doctype html>
<html>
<head></head>
<body>
<p>Strona 2</p>
<p>Witamy

<?php

echo $_SESSION['name'];

?>
na stronie!</p>


<?php
echo "Identyfikator sesji: ",session_id();
?>
    <br><a href="./sesja3.php">Strona 3</a>
</body>
</html>
