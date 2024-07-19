<?php

// Importamos la conexión a la DB
require 'crud.php';

echo "Ingresa el ID del usuario a actualizar: ";
    $id = trim(fgets(STDIN));

echo "Ingresa el nuevo nombre del usuario: ";
    $name = trim(fgets(STDIN));

echo "Ingresa el nuevo email del usuario: ";
    $email = trim(fgets(STDIN));

echo "Ingresa la nueva empresa del usuario: ";
    $company = trim(fgets(STDIN));

echo "Ingresa el nuevo documento del usuario: ";
    $document = trim(fgets(STDIN));

echo "Ingresa la nueva area del usuario (Contabilidad, Marketing, Sistemas, Ventas, Recursos Humanos, Gerencia): ";
    $area = trim(fgets(STDIN));

$result = updateUser($pdo, $id, $name, $email, $company, $document, $area);
    echo $result ? "Usuario actualizado correctamente.\n" : "Error al actualizar el usuario.\n";

?>