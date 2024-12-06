<?php
class Inventario {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM Inventario";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
