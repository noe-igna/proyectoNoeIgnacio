<?php
require_once '/src/config/database.php';
require_once '/src/Models/Venta.php';

class HistorialController {
    public function index() {
        $ventaModel = new Venta();
        $historial = $ventaModel->getHistorialCompleto();

        if (!$historial) {
            $historial = [];
        }

        include_once '/src/Views/ventas/historial.php';
    }
}
