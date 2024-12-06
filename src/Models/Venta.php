<?php
class Venta {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getHistorial() {
        $query = "SELECT v.venta_id, c.nombre AS cliente, v.fecha_venta, v.total 
                  FROM Ventas v 
                  JOIN Clientes c ON v.cliente_id = c.cliente_id 
                  ORDER BY v.fecha_venta DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHistorialCompleto() {
        $query = "SELECT v.venta_id, c.nombre AS cliente, e.nombre AS empleado, 
                         v.fecha_venta, v.total 
                  FROM Ventas v 
                  JOIN Clientes c ON v.cliente_id = c.cliente_id 
                  JOIN Empleados e ON v.empleado_id = e.empleado_id 
                  ORDER BY v.fecha_venta DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
