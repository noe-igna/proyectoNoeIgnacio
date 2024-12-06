<?php
class Carrito {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getCarrito() {
        try {
            $query = "SELECT p.nombre, c.cantidad, p.precio, (c.cantidad * p.precio) AS subtotal 
                      FROM Carrito c 
                      JOIN Productos p ON c.producto_id = p.producto_id";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al obtener el carrito: " . $e->getMessage();
            return [];
        }
    }

    public function addProducto($productoId) {
        try {
            $query = "INSERT INTO Carrito (producto_id, cantidad) VALUES (:producto_id, 1)
                      ON DUPLICATE KEY UPDATE cantidad = cantidad + 1";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':producto_id', $productoId, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            echo "Error al agregar el producto: " . $e->getMessage();
        }
    }

    public function vaciarCarrito() {
        try {
            $query = "DELETE FROM Carrito";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
        } catch (Exception $e) {
            echo "Error al vaciar el carrito: " . $e->getMessage();
        }
    }
}
