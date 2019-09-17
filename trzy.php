<!doctype html>
<html>
<head></head>
    <body>
    <?php
        $liczba = 10;
        $_liczba = 10;
        $imię = 'Janusz';
        $prawda=true;

        $calkowita = 10; // typ int
        $hex = 0xA;
        $oct = 010;
        $bin = 0b1010;
        echo $hex;
        echo $oct;
        echo $bin;

        echo $hex,$bin,$oct;
        echo $hex.$bin.$oct;

        echo '<hr>',$bin,'<hr>';

        $imie= 'Jan';
        $nazw = 'Kowalski';

        $text= <<<TEKST
        Twoje imię : $imie
        TEKST;
        echo $text;
        ?>
    </body>
</html>
