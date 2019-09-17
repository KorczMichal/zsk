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
        $miasto = 'Poznan';
        echo <<<M
        Miasto: $miasto<hr><br>
        M;
        //składnia nowdoc
        echo <<<'M'
        Miasto: $miasto<hr><br>
        M;

        echo "Nazwa zmienniej $miasto";
        echo "Nazwa zmienniej \$miasto".'<br>';

        //operacje na zmiennych

        $potega = 2**10;
        echo $potega;
        echo '<br';
        //operatory bitowe: and &, or |, not ~, xor ^, >>,<<
        $x = 0b1010; //10
        $x= $x >> 1;
        echo $x;
        $x= $x << 2;
        echo $x;
        $x=1;
        $y=1;
        $wynik = $x<=> $y;
        echo $wynik;
        ?>
    </body>
</html>
