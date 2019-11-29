<!doctype html>
<html>
<head>

</head>
<body>

<?php
    $x=2;
echo $x++;//2
echo ++$x;//4
echo $x;//4
$y =  $x++;
echo $y;//4
$y = ++$x;
echo $y;//6
echo ++$y."<br>";//7

//operatory rzutowania
//bool,float,sring,array,object,unset

$text1 = '123abc';
    $x1 = (int)$text1;
    echo "$x1<br>";//123

$text2 = -1;
    $x2 = (bool)$text2;
    echo "$x2<br>";//true=1

$text3 = 10;
    $x3 = (unset)$text3;
    echo "$x3<br>";
    echo gettype($x3)."<br>";//NULL

//rozmiar typu unt
    echo PHP_INT_SIZE."<br>";//8

//kontrola typu zmiennych
    $x = 10;
    echo is_int($x)."<br>";//true = 1
    echo is_string($x)."<br>";//false =
    echo is_float($x)."<br>";//false =
    echo is_bool($x)."<br>";//false =
    echo is_null($x)."<br>";//false =

    $w ;
    echo @$w; // @ - operator ignorowania błędów
    echo @gettype($w)."<br>";

    //zmienne superglobalne

    //$_POST $_GET, $_COOKIE , $_FILES, $_SESSion, $_SERVER
    echo $_SERVER['SERVER_PORT']."<br>";//80
    echo $_SERVER['SERVER_NAME']."<br>";//localhost
    echo $_SERVER['SCRIPT_NAME']."<br>";///123/hmmm.php
    echo $_SERVER['DOCUMENT_ROOT']."<br>";///C:/xampp/htdocs
    echo $_SERVER['SERVER_PROTOCOL']."<br>";///HTTP/1.1

    $lokalizacjapliku = $_SERVER['DOCUMENT_ROOT'];
    $lokalizacjapliku = $_SERVER['SCRIPT_NAME'];
    echo "<br>$lokalizacjapliku";

    //stałe
    //nazwy z dużch liter
    define('NAZWISKO','Kowalski');
    echo NAZWISKO,'<br>';
    define('nazwisko','Kowalski');
    echo nazwisko,'<br>';
    define('wiek',18, true);
    echo WiEk,'<br>';

    //stałe predefiniowane

    echo PHP_VERSION."<br>";//7.3.0
    echo gettype(PHP_VERSION)."<br>";//string

    $ver = PHP_VERSION;
    if($ver >5.6){
        echo "Nowa wersja PHP";
    }
    else {
        echo "Stara wersja PHP";
    }
?>
</body>
</html>
