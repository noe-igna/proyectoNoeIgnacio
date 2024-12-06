<?php
require_once 'src/config/database.php';

try {
    $db = (new Database())->getConnection();
    if ($db) {
        echo "Conexión exitosa a la base de datos.";
    } else {
        echo "No se pudo conectar a la base de datos.";
    }
} catch (PDOException $e) {
    echo "Error de PDO: " . $e->getMessage();
}
