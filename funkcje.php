<!doctype html>
<html>
<head></head>
<body>
<?php
    function show($a):string{
    if($a<0){
        return "ujemna";
    }
    else if($a==0){return "zero";}
    else{return "dodatnia";}
}
  echo  show(-1),"<br>";

    function getValue():int{
        return 10.55;
    }
    echo  getVAlue(),"<br>";

    //zesięg zmiennych
    $x= 10;
    function wyswietl(){
        echo "WArtosc zmiennej \$x wynosi:$GLOBALS[x]<br>";
            echo $GLOBALS['x'];
    }
    wyswietl();
    $y = 5;
    function wyswietlY(){
        global $y;
        echo "WArtosc zmiennej \$y wynosi:$y<br>";
    }
    wyswietlY();
    function sum(){

        static $liczba = 19;
        echo "\$liczba wynosi $liczba<br>";
        $liczba+=1;
    }
    sum();//19
    sum();//20
    sum();//21
    #######################################################
    //argumenty
    function dodaj($x, $y=1){
        return $x+$y;
    }
    $z=20;
    echo dodaj($z),"<br>";//21
    echo dodaj($z,5),"<br>";//25

    //argumenty i typy danych
    function multi( float $x, int $y){
        return $x*$y;
    }
    echo multi(3,4)



?>

</body>
</html>
