<?php

$con = mysqli_connect('localhost', 'root', '', 'ee09');

if (!empty($_POST['nr']) && !empty($_POST['rat1']) && !empty($_POST['rat2']) && !empty(['rat3'])) {
    $nr = $_POST['nr'];
    $rat1 = $_POST['rat1'];
    $rat2 = $_POST['rat2'];
    $rat3 = $_POST['rat3'];

    $kw1 = "INSERT INTO ratownicy VALUES (NULL, '$nr', '$rat1', '$rat2', '$rat3');";

    $res = mysqli_query($con, $kw1);

    echo "Do bazy zostało wysłane zapytanie:$kw1";
}
mysqli_close($con);



?>