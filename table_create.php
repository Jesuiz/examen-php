<?php

// Importamos el archivo de conexión a la DB
require_once 'config.php';


// Ejecutamos la creación de la tabla mediante SQL
// El código SQL crea la tabla 'users' con 5 columnas: id, name, email, company, document, area, created_at.
$sql = "CREATE TABLE users ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    company VARCHAR(50),
    document VARCHAR(50),
    area ENUM('Contabilidad', 'Marketing', 'Sistemas', 'Ventas', 'Recursos Humanos', 'Gerencia'),
    is_active BOOLEAN,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


// Ejecutamos la consulta a la DB para verificar su creación, definimos un error en caso falle
try {
    $pdo->exec($sql);
    echo "Tabla 'users' creada exitosamente";
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
}
?>