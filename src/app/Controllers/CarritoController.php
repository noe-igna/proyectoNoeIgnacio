<?php
require_once '/src/config/database.php';
require_once '/src/Models/Carrito.php';

class CarritoController {
    public function index() {
        try {
      
            $carritoModel = new Carrito();

            $carrito = $carritoModel->getCarrito();

            if (!$carrito) {
                $carrito = []; 
            }

            include_once '/src/Views/carrito/carrito_view.php';
        } catch (Exception $e) {
            echo "Error al cargar el carrito: " . $e->getMessage();
        }
    }

    public function add($productoId) {
        try {
            $carritoModel = new Carrito();
            $carritoModel->addProducto($productoId);
            header('Location: /src/public/carrito.php');
        } catch (Exception $e) {
            echo "Error al agregar el producto al carrito: " . $e->getMessage();
        }
    }

    public function checkout() {
        try {
            include_once '/src/Views/carrito/checkout.php';
        } catch (Exception $e) {
            echo "Error al cargar la página de pago: " . $e->getMessage();
        }
    }
}
