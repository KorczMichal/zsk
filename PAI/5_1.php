<!doctype html>
<html>

<head></head>
<body>

    <?php
    if(!empty($_GET['country'])){

        echo "ok";
    }
    else
    {


    ?>
<form method="get">
<input type="text" name="country" placeholder="Podaj kraj">
<input type="submit" name="button" value="zatwierdź">


</form>
    <?php }?>
</body>
</html>
