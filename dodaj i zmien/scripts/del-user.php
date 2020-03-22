<?php
    require_once './connect.php';
    require_once './funkcje.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo $_GET['id'];
        $sql = "DELETE FROM `user` WHERE `user`.`id` = $id";

        if (mysqli_query($conn, $sql)) {
            //echo "Prawidłowo usunięto użytkownika";
            header('location: ../');
        }
    }

