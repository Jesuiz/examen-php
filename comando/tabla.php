<?php


// Importamos el archivo CRUD
require 'crud.php';


// Llamamos a 'createUsersTable' dentro de 'crud.php' para crear la tabla
try {
    createUsersTable($pdo);
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage() . "\n";
}


?>
