<?php

namespace App\controllers;
use App\Core\ConexionBD;

class RegisterController
{
    private $db;

    function __construct()
    {
        $this->db = new ConexionBD();

        if (!empty($_POST["btnRegister"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recuperar los datos del formulario
                $email = $_POST["emailRegister"];
                $password = password_hash($_POST["passwordRegister"], PASSWORD_BCRYPT); // Encriptar la contraseña
                $nombre = $_POST["nombreRegister"];
                $apellidos = $_POST["apellidosRegister"];
                $fechaNacimiento = $_POST["fechaRegister"];
                $pais = $_POST["paisRegister"];
                $username = $nombre . '.' . $apellidos; // Crear un nombre de usuario basado en el nombre y apellido

                // Insertar los datos en la base de datos
                $sql = "INSERT INTO users (username, firstName, lastName, email, password) 
                        VALUES (:username, :firstName, :lastName, :email, :password)";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':firstName', $nombre);
                $stmt->bindParam(':lastName', $apellidos);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);

                if ($stmt->execute()) {
                    header("Location: " . BASE_URL . "/analysis");
                    exit;
                } else {
                    echo "Error: No se pudo registrar el usuario.";
                }
            } else {
                // Si el formulario no se envió correctamente, mostrar un mensaje de error
                echo "Error: El formulario no se envió correctamente.";
            }
        }
    }
}
?>