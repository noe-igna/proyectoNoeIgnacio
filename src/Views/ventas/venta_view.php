<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ventas</title>
    <link rel="stylesheet" href="/src/public/assets/css/main.css">
</head>
<body>
<?php include_once '/src/Views/layouts/navbar.php'; ?>

    <div class="container">
        <h1>Listado de Ventas</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Venta</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($ventas)): ?>
                    <?php foreach ($ventas as $venta): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($venta['venta_id']); ?></td>
                            <td><?php echo htmlspecialchars($venta['cliente']); ?></td>
                            <td><?php echo htmlspecialchars($venta['fecha_venta']); ?></td>
                            <td>$<?php echo htmlspecialchars($venta['total']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No hay ventas registradas.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
