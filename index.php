<?php

require_once 'src/config/database.php';
require_once 'src/app/Controllers/LoginController.php';
require_once 'src/app/Controllers/ProductoController.php';
require_once 'src/app/Controllers/VentaController.php';
require_once 'src/app/Controllers/HistorialController.php';
require_once 'src/app/Controllers/CarritoController.php';
require_once 'src/app/Controllers/PagoController.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ./src/Views/login/login_form.php');
    exit;
}
$user = $_SESSION['user'];
include_once 'src/Views/layouts/header.php';
?>
<nav>
    <ul>
        <?php if ($user['rol'] == 'empleado'): ?>
            <li><a href="/src/Views/productos/catalogo.php">Catálogo</a></li>
            <li><a href="/src/Views/ventas/historial.php">Historial de Ventas</a></li>
            <li><a href="/src/Models/inventario.php">Inventario</a></li>
            <li><a href="/src/Models/proveedores.php">Proveedores</a></li>
        <?php else: ?>
            <li><a href="/src/Views/productos/catalogo.php">Catálogo</a></li>
            <li><a href="/src/Models/carrito.php">Carrito</a></li>
        <?php endif; ?>
    </ul>
</nav>

<div class="container">
    <h1>Bienbenido, <?php echo htmlspecialchars($user['nombre']); ?>!</h1>
    <p>Selecciona una opción del menú para continuar.</p>
</div>

<?php
include_once 'src/Views/layouts/footer.php';
?>