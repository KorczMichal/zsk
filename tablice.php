<!doctype html>
<html>
<head></head>
<body>

    <?php
    $colors=['Red','Green','Blue'];
    $colors[3]="Magenta";
    for($i=0;$i <count($colors);$i++){

        $elem = $i + 1;
        echo "Element $elem: $colors[$i] <br>";
    }
    echo "<br> Funkcja: <br>";
    function showArray($arr){
        for($i=0;$i <sizeof($arr);$i++){

        $elem = $i + 1;
        echo "Element $elem: $arr[$i] <br>";
    }
    }
        showArray($colors);
    ?>


</body>
</html>
