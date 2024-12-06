<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="/public/assets/css/main.css">
</head>
<body>
<?php include_once '/src/Views/layouts/navbar.php'; ?>

    <div class="container">
        <h1><?php echo $producto['nombre']; ?></h1>
        <p><?php echo $producto['descripcion']; ?></p>
        <p>Precio: $<?php echo $producto['precio']; ?></p>
        <a href="/carrito/add?id=<?php echo $producto['producto_id']; ?>">Agregar al Carrito</a>
    </div>
</body>
</html>
