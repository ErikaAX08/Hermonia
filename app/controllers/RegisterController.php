<?php

namespace App\controllers;
use App\Core\ConexionBD;
use DateTime; // Importar la clase DateTime

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
                $password = $_POST["passwordRegister"]; // Recuperar la contraseña original
                $nombre = $_POST["nombreRegister"];
                $apellidos = $_POST["apellidosRegister"];
                $fechaNacimiento = $_POST["fechaRegister"];
                $pais = $_POST["paisRegister"];
                $suscripcion = $_POST["suscripcionRegister"] ?? 'free'; // Valor predeterminado: 'free'

                // Validar la contraseña antes de encriptarla
                if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
                    echo "Error: La contraseña debe tener al menos 8 caracteres, incluir letras mayúsculas, minúsculas y al menos un número.";
                    exit;
                }

                // Encriptar la contraseña después de validarla
                $passwordHash = password_hash($password, PASSWORD_BCRYPT);

                // Validar la fecha de nacimiento
                $fechaNacimientoDate = DateTime::createFromFormat('Y-m-d', $fechaNacimiento);
                $fechaActual = new DateTime();
                $edad = $fechaActual->diff($fechaNacimientoDate)->y;

                if (!$fechaNacimientoDate || $edad < 13) {
                    echo "Error: Debes tener al menos 13 años para registrarte.";
                    exit;
                }

                // Generar el username
                $usernameBase = strtolower(trim($nombre) . '.' . trim($apellidos));
                $usernameBase = preg_replace('/[^a-z0-9.]/', '', $usernameBase);
                $username = substr($usernameBase, 0, 25);

                // Otros datos
                $fechaActual = date('Y-m-d H:i:s'); // Fecha de registro

                try {
                    // Insertar los datos en la base de datos
                    $sql = "INSERT INTO usuarios 
                            (nombre, email, fecha_registro, username, first_name, last_name, password, sign_up_date, fecha_nacimiento, pais, suscripcion) 
                            VALUES 
                            (:nombre, :email, :fecha_registro, :username, :first_name, :last_name, :password, :sign_up_date, :fecha_nacimiento, :pais, :suscripcion)";
                    $stmt = $this->db->pdo->prepare($sql);

                    // Vincular los parámetros
                    $stmt->bindParam(':nombre', $nombre);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':fecha_registro', $fechaActual);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':first_name', $nombre);
                    $stmt->bindParam(':last_name', $apellidos);
                    $stmt->bindParam(':password', $passwordHash); // Usar la contraseña encriptada
                    $stmt->bindParam(':sign_up_date', $fechaActual);
                    $stmt->bindParam(':fecha_nacimiento', $fechaNacimiento);
                    $stmt->bindParam(':pais', $pais);
                    $stmt->bindParam(':suscripcion', $suscripcion);

                    // Ejecutar la consulta
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