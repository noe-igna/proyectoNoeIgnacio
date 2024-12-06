<?php
require_once '/src/config/database.php';
require_once '/src/Models/Producto.php';

class ProductoController {
    public function catalogo() {
        try {
            $productoModel = new ProductoModel();
            $productos = $productoModel->getAll();
            if (!$productos) {
                $productos = []; 
            }
            include_once '/src/Views/productos/catalogo.php';
        } catch (Exception $e) {
            echo "Error al cargar el catálogo: " . $e->getMessage();
        }
    }

    public function detalle($id) {
        try {
            $productoModel = new ProductoModel();
            $producto = $productoModel->getById($id);
            if (!$producto) {
                echo "Producto no encontrado.";
                return;
            }
            include_once '/src/Views/productos/detalle.php';
        } catch (Exception $e) {
            echo "Error al cargar el detalle del producto: " . $e->getMessage();
        }
    }
}
