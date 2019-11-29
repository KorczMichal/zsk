<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css\form.css">
</head>
<body>
<form method="POST" action="">
    <input type ="text" name="name" placeholder ="Podaj imie" autofocus maxlength="10">
    <input type ="number" name="age" placeholder ="Podaj wiek">
    <input type ="submit" name="button" value="Zatwierdź">

</form>
<?php

if(!empty($_POST['name']) && !empty($_POST['age'])){
$name= $_POST['name'];
$age= $_POST['age'];
$name2 = trim($name);
$name2 = strtolower($name2);
    $censore= array('Ą','Ę','Ś','Ż','Ź','Ć','Ó','Ń','Ł');
    $replace= array('ą','ę','ś','ż','ź','ć','ó','ń','ł');
    $name2 = str_replace($censore,$replace,$name2);
$name2 =ucwords($name2);
echo "Przed zmianą $name<br> Po zmianie $name2<br>";
echo "<table>";
    echo "<tr>";
            echo"<th>Imię</th>";
            echo"<th>Wiek</th>";
    echo "</tr>";
    echo "<tr>";
            echo"<td>$name2</td>";
            echo"<td>$age</td>";
    echo "</tr>";
echo "</table>";

?>
    <table>
    <tr>
        <th>Imię</th>
        <th>Wiek</th>
    </tr>
    <tr>
        <td><?php echo $name2 ?></td>
        <td><?php echo $age ?></td>
        </tr>
    </table>
    <?php }?>
</body>
</html>
