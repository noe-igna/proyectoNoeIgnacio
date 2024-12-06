<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/src/public/assets/css/main.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="./login_form.php" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn">Entrar</button>
        </form>
    </div>
</body>
</html>
