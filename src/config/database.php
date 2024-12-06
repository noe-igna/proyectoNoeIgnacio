<?php
class Database {
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO(
                'mysql:host=localhost;port=1111;dbname=ingnatexbookstories;charset=utf8mb4',
                'root',
                '1234'
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
            exit;
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
