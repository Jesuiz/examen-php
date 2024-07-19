<?php

// Importamos la conexión a la DB
require 'config.php';


// Creamos un usuario con los 5 campos definidos en la DB
function createUser($pdo, $name, $email, $company, $document, $area) {
    $sql = "INSERT INTO users (name, email, company, document, area) VALUES (:name, :email, :company, :document, :area)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':company', $company, PDO::PARAM_STR);
    $stmt->bindParam(':document', $document, PDO::PARAM_STR);
    $stmt->bindParam(':area', $area, PDO::PARAM_STR);
    $stmt->execute();
    return $pdo->lastInsertId();
}


// Listamos todos los registros de la tabla 'usres'
function readUsers($pdo) {
    return $pdo->query('SELECT * FROM users')->fetchAll();
}


// Actualizamos un usuario a partir de su ID
function updateUser($pdo, $id, $name, $email, $company, $document, $area) {
    $stmt = $pdo->prepare('UPDATE users SET name = ?, email = ?, company = ?, document = ?, area = ? WHERE id = ?');
    return $stmt->execute([$name, $email, $company, $document, $area, $id]);
}


// Borramos un usuario a partir de su ID
function deleteUser($pdo, $id) {
    $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
    return $stmt->execute([$id]);
}


?>