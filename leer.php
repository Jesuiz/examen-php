<?php

// Importamos la conexión a la DB
require 'crud.php';


// Guardamos en la variable todos los usuarios mediante PDO
$users = readUsers($pdo);


// Mediante If-Else, informamos en caso no haya usuarios registrados o enviamos los detalles del usuario recién creado
if (empty($users)) {
    echo "No hay usuarios registrados.\n";
} else {
    echo "Lista de usuarios registrados en la DB: \n";
    foreach ($users as $user) {
        echo "- Id: {$user['id']}, Nombre: {$user['name']}, Email: {$user['email']}, Empresa: {$user['company']}, Documento: {$user['document']}, Área: {$user['area']}. \n";
    }
}


?>