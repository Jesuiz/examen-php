<?php

// Importamos la conexión a la DB
require 'config.php';


// Cremos la tabla 'users' si es que ya no existe
function createUsersTable($pdo) {
    try {
        $pdo->query("SELECT 1 FROM users LIMIT 1");
        echo "La tabla 'users' ya existe.\n";
    } catch (PDOException $e) {
        if ($e->getCode() == '42S02') {
            $sql = "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                company VARCHAR(100),
                document VARCHAR(20),
                area VARCHAR(50)
            ) ENGINE=INNODB;";
            
            $pdo->exec($sql);
            echo "Tabla 'users' creada correctamente.\n";
            echo "Estás listo para crear nuevos usuarios, intentalo con el comando 'php crear.php'.\n";
        } else {
            throw $e;
        }
    }
}


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
    $stmt = $pdo->prepare('SELECT COUNT(*) FROM users WHERE id = ?');
    $stmt->execute([$id]);
    $userExists = $stmt->fetchColumn();

    if ($userExists) {
        $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
        return $stmt->execute([$id]);
    } 
}

?>