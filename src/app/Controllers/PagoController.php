<?php
class PagoController {
    public function procesar() {
        // Simulación de una pasarela de pago como PayPal
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $tarjeta = $_POST['tarjeta'];

            if ($this->validarTarjeta($tarjeta)) {
                echo "Pago procesado correctamente para $nombre.";
            } else {
                echo "Error en el pago, verifique los datos.";
            }
        }
    }

    private function validarTarjeta($tarjeta) {
        // Simulación de validación de tarjeta
        return strlen($tarjeta) === 16;
    }
}
