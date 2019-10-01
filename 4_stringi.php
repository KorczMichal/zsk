<!doctype html>
<html>
<head>
</head>
<body>
<?php
    $text = <<< TEXT
    zsk - Zespół
    szkół
    komunikacji
    TEXT;
    echo "przed wywołaniem nl2br: <br> $text <br>";
    echo "Po wywołaniu nl2br: <br>";
    echo nl2br($text);
    //zamiana na małe litery
    $test = "JaNusZ";
    echo "<br>$test<br>";//JaNusZ
        $test = strtolower($test);
    echo "$test<br>";//janusz
    //zamiana na duże litery
        $test = strtoupper($test);
    echo "$test<br>";//JANUSZ
    //zamiana 1.lit. na dużą
    $test2 = "jaNusz Tomasz agata";
    echo ucfirst($test2).'<br>';
    //zamiana pierwszych liter na duże
    echo ucwords($test2).'<br>';

    ######################################3
    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus, libero eu commodo accumsan, sapien est euismod dui, id consequat nisi mi eget eros. Nulla in nisi in ante tincidunt commodo. Ut fringilla metus vitae ex volutpat ornare. Ut tellus massa, semper id lacinia in, eleifend eu tortor. Praesent dictum non leo ut consequat. Nullam convallis nulla ac diam condimentum, ac finibus mauris tristique. Nullam sed rutrum tortor, et finibus velit. Vivamus nisl turpis, feugiat ac eleifend at, volutpat vitae mauris. Etiam cursus sed nulla et gravida. Morbi eget metus urna. Mauris commodo, justo quis auctor mollis, leo purus euismod urna, non posuere purus urna a leo. Nullam id massa eu enim finibus congue. Praesent congue nunc eu metus tempor faucibus. Donec vitae finibus massa.';
    echo $lorem.'<br>'.'<br>';
    $col = wordwrap($lorem,40,'<hr>');
    echo $col;
    //czyszczenie ekranu
    ob_clean();
    //usuwanie białych znaków
    $name= "Kasia";
    $name1= "  Kasia ";

    echo 'Długośc zmiennej $name ',strlen($name),'<br>';
    echo 'Długośc zmiennej $name ',strlen($name1),'<br>';
    echo strlen(ltrim($name1)),'<br>';//6
    echo strlen(rtrim($name1)),'<br>';//7
    echo strlen(trim($name1)),'<br>';//7
    //przeszukiwanie ciągów znaków
    $address =
    ?>
</body>
</html>
