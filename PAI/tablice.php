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

//Sortowanie
    $tab = array(10,1,5,10000,13,-4);
    function tab1($tab){
        foreach($tab as $value){
            echo "$value ";
        }
echo "<br>";
    }
    tab1($tab);
    echo"<br>";
    //sortowanie tablicy indeksowanej niemalejące według wartości
    sort($tab);
    tab1($tab);
    echo"<br>";

    //sortowanie nierosnące według wartości
    rsort($tab);
    tab1($tab);
    echo "<br>";
    #########################################3
    $tab2 = array("katarzyna","Zenon","Paweł", "anna" );
    sort($tab2);
    tab1($tab2);
    echo"<br>";
    ###############################################3
    //sortowanie niemalejące tablicy asocjacyjnej według wartości

    $tabAssoc = array(
    "surname" => "Nowak",
    "name" => "Andrzej",
    "city" => "Poznań",
    "age" => 30
    );

tab1($tabAssoc);
asort($tabAssoc);
tab1($tabAssoc);
//sortowanie nierosnąco według wartości
tab1($tabAssoc);
arsort($tabAssoc);
tab1($tabAssoc);
//sortowanie tablicy niemalejąco według klucza
ksort($tabAssoc);
tab1($tabAssoc);
  //sortowanie tablicy nierosnąco według klucza
krsort($tabAssoc);
tab1($tabAssoc);

    //wyświetlanie danych
    var_dump($tabAssoc);
    echo"<br>";
    echo"<pre>";
    echo print_r($tabAssoc);
    echo"</pre>";



    ?>


</body>
</html>
