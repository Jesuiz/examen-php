<?php


// Importamos la conexión a la DB
require 'crud.php';  


echo "Ingresa el ID del usuario a borrar: ";
    $id = trim(fgets(STDIN));
    

$result = deleteUser($pdo, $id);
    if ($result) {
        echo "Usuario con id: $id eliminado correctamente. \n";
    } else {
        echo "Error, el usuario con id: $id no existe o no pudo ser eliminado. \n";
    }


?>