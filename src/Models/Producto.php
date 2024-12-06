<?php
class ProductoModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAll() {
        try {
            $query = "SELECT * FROM Productos";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al obtener los productos: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id) {
        try {
            $query = "SELECT * FROM Productos WHERE producto_id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al obtener el producto: " . $e->getMessage();
            return null;
        }
    }
}
