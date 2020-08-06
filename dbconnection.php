<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'testasm';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
} catch (PDOException $e) {
    echo "Ket noi that bai" . $e->getMessage();
}
