<!doctype html>
<html>

<head></head>
<body>

    <?php
    if(!empty($_GET['country'])){
        $lang =  $_GET['lang'];
        $country =  $_GET['country'];
        switch($lang){

            case 'pl': $lang= "polski";
                break;
            case 'en': $lang = "angielski";
                break;

        }
        echo "$country<br>$lang";
    }
    else
    {


    ?>
<form method="get">
<input type="text" name="country" placeholder="Podaj kraj">
<input type="radio" name="lang" value="pl" checked>Polski
<input type="radio" name="lang" value="en" checked>Angielski
<input type="submit" name="button" value="zatwierdź">


</form>
    <?php }?>
</body>
</html>
