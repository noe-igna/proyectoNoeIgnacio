<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="/NegosioClases/proyectoNoeIgnacio/src/public/assets/css/main.css">
</head>
<body>
<?php include_once '/src/Views/layouts/navbar.php'; ?>
    <div class="container">
        <h1>Carrito de Compras</h1>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($carrito)): ?>
                    <?php foreach ($carrito as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($item['cantidad']); ?></td>
                            <td>$<?php echo htmlspecialchars($item['precio']); ?></td>
                            <td>$<?php echo htmlspecialchars($item['subtotal']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">El carrito está vacío.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="/carrito/checkout" class="btn">Ir a Pagar</a>
    </div>
</body>
</html>
