<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">
    table,td,th{
      border:1px solid black;
      border-collapse: collapse;

    }
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Uprawnienia do tabeli user</title>
</head>
<body>

    <?php
        require_once './scripts/connect.php';
        require_once './scripts/funkcje.php';

        $sql = "select user.id, name, surname, birthday, color.color from user join color on user.color=color.id";

        if ($result = mysqli_query($conn, $sql)) {
            echo "Poprawne zapytanie<br>";
            $count = mysqli_num_rows($result);

            echo "Ilość użytkowników: $count<br><br>";

            echo <<<TABLE
            <table>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Data urodzenia</th>
                    <th>Rok urodzenia</th>
                    <th>Kolor</th>
                    <th>Usuń użytkownika</th>
                    <th>Aktualizuj dane użytkownika</th>
                </tr>
            TABLE;

            while ($row = mysqli_fetch_assoc($result)) {
                $year = year($row['birthday']);

                echo <<<ROW
                    <tr>
                        <td>$row[surname]</td>
                        <td>$row[name]</td>
                        <td>$row[birthday]</td>
                        <td>$year</td>
                        <td>$row[color]</td>
                        <td><a href="./scripts/del-user.php?id=$row[id]">Usuń</a></td>
                        <td><a href="./?update_id=$row[id]">Aktualizuj</a></td>
                    </tr>
                ROW;
            }
            echo "</table>";
        } else {
            echo "Błędne zapytanie<br>";
        }

        $sql = "SELECT * from color";
        $result = mysqli_query($conn, $sql);
        echo <<<FORM
            <h2>Dodawanie usera</h2>
            <form action="./scripts/add-user.php" method="post">
                <input type="text" name="name" placeholder="imie">
                <br>
                <input type="text" name="surname" placeholder="nazwisko">
                <br>
                <input type="date" name="birthday" placeholder="data urodzenia">
                <br>
        FORM;
        echo "<label>Podaj kolor<br><select name=\"color\">";
                while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"$row[id]\">$row[color]</option>";
                }
        echo "</select></label>";
        echo <<<FORM1
            <br>
                <input type="submit" name="button" value="Dodaj">
            </form>
        FORM1;

        if (isset($_GET['update_id'])) {
            $id_set = $_GET['update_id'];
            $sql = "SELECT * FROM user WHERE id=$id_set";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);
            $name = $user['name'];
            $surname = $user['surname'];
            $birthday = $user['birthday'];
            $color = $user['color'];

            echo <<<FORM
            <h2>Aktualizacja usera</h2>
            <form action="./scripts/update-user.php" method="post">
                <input type="text" name="name" value="$name">
                <br>
                <input type="text" name="surname" value="$surname">
                <br>
                <input type="date" name="birthday" value="$birthday">
                <br>
            FORM;
            $sql2 = "SELECT * from color";
            $result2 = mysqli_query($conn, $sql2);
            echo "<label>Podaj kolor<br><select name=\"color\">";
            while ($row = mysqli_fetch_assoc($result2)) {
                    echo "<option value=\"$row[id]\">$row[color]</option>";
            }
            echo "</select></label>";
            echo <<<FORM2
                <br>
                <input type="hidden" name="id" value="$id_set">
                <br>
                <input type="submit" name="button" value="Aktualizuj">
            </form>
            FORM2;
        }

        mysqli_close($conn);
    ?>

</body>
</html>
