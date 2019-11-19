
<!DOCTYPE html>
<hmtl>
<head></head>
<body>

    <form method="POST">
    <input type="text" name="name" value="">Imie<br>
    <input type="text" name="surname" value="">Nazwisko<br>
    <input type="submit" value="zatwierdź"/>
    </form>
    <?php
if(isset($_POST['name'])){
$_SESSION['imie']=$_POST['name'];
setcookie('nazwisko', $_POST['surname'],time()-(48*3600));
echo "imie:",$_SESSION['imie'],"<br>";
echo $_COOKIE['nazwisko'],"<br>";
}
?>
</body>
</hmtl>
