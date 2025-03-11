<?php

namespace App\controllers;
use app\core\ConexionBD;

class RegisterController
{

    function __construct()
    {
        $link = new ConexionBD();

        showAlert("¡Otro mensaje desde PHP!");

        if (!empty($_POST["btnRegister"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recuperar los datos del formulario
                $email = $_POST["emailRegister"];
                $password = $_POST["passwordRegister"];
                $nombre = $_POST["nombreRegister"];
                $apellidos = $_POST["apellidosRegister"];
                $fechaNacimiento = $_POST["fechaRegister"];
                $pais = $_POST["paisRegister"];

                header("Location:" .BASE_URL."/analysis");
                exit;

            } else {
                // Si el formulario no se envió correctamente, mostrar un mensaje de error
                echo "Error: El formulario no se envió correctamente.";
            }
        }
    }

}


?>