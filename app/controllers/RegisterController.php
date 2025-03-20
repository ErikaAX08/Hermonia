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
                $email = $_POST["emailRegister"];
                $password = password_hash($_POST["passwordRegister"], PASSWORD_BCRYPT);
                $nombre = $_POST["nombreRegister"];
                $apellidos = $_POST["apellidosRegister"];

                $usernameBase = strtolower(trim($nombre) . '.' . trim($apellidos));
                $usernameBase = preg_replace('/[^a-z0-9.]/', '', $usernameBase);
                $username = substr($usernameBase, 0, 25);

                $fechaActual = date('Y-m-d H:i:s');

                $profilePicDefault = 'default.jpg';

                try {
                    // Insertar los datos en la base de datos
                    $sql = "INSERT INTO users (username, firstName, lastName, email, password, signUpDate, profilePic) 
                            VALUES (:username, :firstName, :lastName, :email, :password, :signUpDate, :profilePic)";
                    $stmt = $this->db->pdo->prepare($sql);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':firstName', $nombre);
                    $stmt->bindParam(':lastName', $apellidos);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $password);
                    $stmt->bindParam(':signUpDate', $fechaActual);
                    $stmt->bindParam(':profilePic', $profilePicDefault);

                    if ($stmt->execute()) {
                        header("Location: " . BASE_URL . "logged");
                        exit;
                    } else {
                        echo "Error: No se pudo registrar el usuario. Detalles: " . implode(", ", $stmt->errorInfo());
                    }
                } catch (\PDOException $e) {
                    echo "Error de base de datos: " . $e->getMessage();
                }
            } else {
                echo "Error: El formulario no se envió correctamente.";
            }
        } else {
            echo "El parámetro btnRegister no está presente. Datos recibidos: ";
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        }
    }
}
?>