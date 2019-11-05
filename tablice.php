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
    //foreach
    echo "<br>Foreach<br>";
    foreach($colors as $key => $value){
        $elem=$key+1;
        echo "Element $elem: $value<br>";
    }
    //tablice asocjacyjne
    echo "<br>Tablica asocjacyjna<br>";
    $data = array(
    'imie' => 'Janusz',
    'nazwisko' => 'Nowak',
    'wiek' => 20
    );
    echo $data['imie'],"<br>";
    foreach($colors as $key => $value){
        echo "Element $key: $value<br>";
    }
    //tablice wielowymiarowe
    $student = array(
     array('Katarzyna','Nowak',30),
     array('Paweł','Nowak'),
     array('Anna','Kowalska',31),
    );
    echo "<br>";
    for($i=0;$i<count($student);$i++){
        for($j=0;$j<count($student[$i]);$j++){
            echo $student[$i][$j],"<br>";
        }
        echo "<br>";
    }
    echo "<br> Foreach:<br>";
    foreach($student as $key => $value){
        foreach ($student[$key] as $key => $value){
            echo "$value <br>";
        }
        echo "<br>";
    }

    echo "<br> Foreach2:<br>";
    foreach($student as $value){
        foreach ($value as $x){
            echo "$x <br>";
        }
        echo "<br>";
    }
    /*
    Utwórz tablicę 3-wymiarową i napisz funkcję wyświetlającą zawartość
    */
    $tab3D = array(
    array(array(1,2),array(3,4)),
    array(array(5,6),array(7,8)),
    array(array(9,10),array(11,12)),
    );
    foreach($tab3D as $value){
        foreach($value as $x){;
            foreach($x as $y){
                echo "$y<br>";}
        }
        echo"<br>";
    }
    ?>


</body>
</html>
