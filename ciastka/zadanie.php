
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
if(isset($_POST['name'])&&isset($_POST['surname'])){
$_SESSION['imie']=$_POST['name'];
setcookie('nazwisko', $_POST['surname'],time()+(48*3600));
echo "imie:",$_SESSION['imie'],"<br>";
echo "nazwisko: ",$_COOKIE['nazwisko'],"<br>";
echo "<script>location.reload</script>";
}
?>
</body>
</hmtl>
