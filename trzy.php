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

        $text= <<<E
        Twoje imię : $imie<br>
        Twoje nazwisko: $nazw
        E;//Etykieta, nie dawać spacji, uważać na białe znaki
        echo $text;
        echo <<<E
        <br>
        Tekst<hr>
        E;
        //składnia nowdoc

        ?>
    </body>
</html>
