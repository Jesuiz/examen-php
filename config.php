<?php


// Asegúrate de tener una DB MySQLcreada con el nombre 'test_db'
// Aquí configuramos la conexión a la DB MySQL creada en 'freedb.tech'
$host = "localhost";
$db = "test_db";
$user = "root"; 
$pass = "";
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];


try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


?>