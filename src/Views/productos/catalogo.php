<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="/src/public/assets/css/main.css">
</head>
<body>
<?php include_once '/src/Views/layouts/navbar.php'; ?>

    <div class="container">
        <h1>Catálogo de Productos</h1>
        <?php if (!empty($productos)): ?>
            <div class="productos">
                <?php foreach ($productos as $producto): ?>
                    <div class="producto">
                        <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                        <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                        <p>Precio: $<?php echo htmlspecialchars($producto['precio']); ?></p>
                        <a href="/productos/detalle.php?id=<?php echo $producto['producto_id']; ?>" class="btn">Ver Detalle</a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No hay productos disponibles en este momento.</p>
        <?php endif; ?>
    </div>
</body>
</html>
