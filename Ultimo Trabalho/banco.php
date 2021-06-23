<?php

$user = "root";
$pass = "";

try {
    $conn = new PDO('mysql:host=localhost;dbname=grola_db', $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage();
}
