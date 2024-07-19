<?php

// Importamos el archivo CRUD
require 'crud.php';


// Definimos un input para cada valor de la columna en la tabla 'users'
echo "Ingresa el nombre del nuevo usuario: ";
    $name = trim(fgets(STDIN));

echo "Ingresa el email del nuevo usuario: ";
    $email = trim(fgets(STDIN));

echo "Ingresa la empresa del nuevo usuario: ";
    $company = trim(fgets(STDIN));

echo "Ingresa el documento del nuevo usuario: ";
    $document = trim(fgets(STDIN));

echo "Ingresa el area del nuevo usuario (Contabilidad, Marketing, Sistemas, Ventas, Recursos Humanos, Gerencia): ";
    $area = trim(fgets(STDIN));


// Informamos si el usuario se ha creado o ha habido un error en el proceso
try {
    $id = createUser($pdo, $name, $email, $company, $document, $area);
        echo "Se ha creado el usuario '$name' con id '$id' correctamente.\n";
} catch (PDOException $e) {
        echo "Error al crear el usuario: " . $e->getMessage() . "\n";
}


?>