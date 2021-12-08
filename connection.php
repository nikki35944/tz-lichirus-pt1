<?php

$user = "root";
$pass = "";


// Подключение
try {
    $conn = new PDO('mysql:host=localhost;dbname=tz', $user, $pass);
} catch (PDOException $e) {
    print "Ошибка: " . $e->getMessage() . "<br>";
    die();
}