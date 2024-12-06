<?php
require_once '/src/config/database.php';
require_once '/src/Models/Venta.php';

class VentaController {
    public function index() {
        $ventaModel = new Venta();
        $ventas = $ventaModel->getHistorial();

        if (!$ventas) {
            $ventas = [];
        }

        include_once '/src/Views/ventas/venta_view.php';
    }

    public function historial() {
        $ventaModel = new Venta();
        $historial = $ventaModel->getHistorialCompleto();

        if (!$historial) {
            $historial = [];
        }

        include_once '/src/Views/ventas/historial.php';
    }
}
