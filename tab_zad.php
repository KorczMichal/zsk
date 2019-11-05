<!doctype>
<html>
<head></head>
<body>
    <form method="POST">
        <input type="number" name="l_inp" value="">Liczba członków rodziny<br>
        <input type="submit" value="Zatwierdź">
    </form>
    <?php
    if(!empty($_POST['l_inp'])){
    $l_cz= $_POST['l_inp'];
    if(!empty($_POST["imie1"])){
        for($i=0;$i<l_cz;$i++){
        $rodzina[$i] = array($_POST["imie$i"],$_POST["nazwisko$i"],["wiek$i"]);
        }
        foreach($rodzina as $value){
            foreach($value as $x){
                echo "$x<br>";
        }
        }
    }
    else{
    echo "<form method=\"POST\">";
    for($i=0;$i<$l_cz;$i++){
        $j=$i+1;
        echo "<input type=\"text\" name=\"imie$i\">Imie$j";
        echo "<input type=\"text\" name=\"nazwisko$i\">Nazwisko$j";
        echo "<input type=\"text\" name=\"wiek$i\">Wiek$j<br><br>";
    }
        echo "<input type=\"submit\" value=\"Zatwierdź\">";
        echo "</form>";

        }
    }

?>
</body>
</html>
