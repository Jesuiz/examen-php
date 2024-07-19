<?php


// Importamos la conexión a la DB
require 'crud.php';

// Guardamos en la variable todos los usuarios mediante PDO
$users = readUsers($pdo);

echo "Ingresa el ID del usuario a borrar: ";
$id = trim(fgets(STDIN));


// Con if-else informamos si el usuario se ha eliminado o no y luego informamos la data de usuarios actual
if (deleteUser($pdo, $id, $users)) {
    echo "Se ha eliminado al usuario con id: $id correctamente. \n";

    $users = readUsers($pdo);
    echo "Esta es la lista de usuarios en el sistema: \n";
    foreach ($users as $user) {
        echo "- Id: {$user['id']}, Nombre: {$user['name']}, Email: {$user['email']}, Empresa: {$user['company']}, Documento: {$user['document']}, Área: {$user['area']}. \n";
    }
} else {
    echo "Ups!, el usuario con ID $id no existe... \n\n";

    $users = readUsers($pdo);
    echo "Esta es la lista de usuarios en el sistema: \n";
    foreach ($users as $user) {
        echo "- Id: {$user['id']}, Nombre: {$user['name']}, Email: {$user['email']}, Empresa: {$user['company']}, Documento: {$user['document']}, Área: {$user['area']}. \n";
    }
}


?>
