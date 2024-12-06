<?php
require_once '/src/Models/Login.php';

class LoginController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $loginModel = new Login();
            $user = $loginModel->authenticate($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: /NegosioClases/proyectoNoeIgnacio/index.php');
                exit;
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        }

        include_once '/src/Views/login/login_form.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /src/Views/login/login_form.php');
        exit;
    }
}
