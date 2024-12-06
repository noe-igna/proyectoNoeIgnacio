<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Pago</title>
    <link rel="stylesheet" href="/public/assets/css/main.css">
</head>
<body>
<?php include_once '/src/Views/layouts/navbar.php'; ?>
    <div class="container">
        <h1>Procesar Pago</h1>
        <form action="/carrito/procesarPago" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="tarjeta">Número de Tarjeta:</label>
            <input type="text" id="tarjeta" name="tarjeta" required>
            
            <button type="submit">Pagar</button>
        </form>
    </div>
</body>
</html>
