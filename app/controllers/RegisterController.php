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

        // Iniciar sesión si no está iniciada (para poder usar $_SESSION para mensajes de error)
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Limpiar errores previos de registro de la sesión
        unset($_SESSION['error_register']);
        unset($_SESSION['success_register']); // Si quieres manejar mensajes de éxito también

        if (!empty($_POST["btnRegister"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = trim($_POST["emailRegister"] ?? '');
                $password = $_POST["passwordRegister"] ?? ''; 
                $nombre = trim($_POST["nombreRegister"] ?? '');
                $apellidos = trim($_POST["apellidosRegister"] ?? '');
                $fechaNacimiento = $_POST["fechaRegister"] ?? '';
                $pais = trim($_POST["paisRegister"] ?? '');
                $suscripcion = $_POST["suscripcionRegister"] ?? 'free';

                
                if (empty($email) || empty($password) || empty($nombre) || empty($apellidos) || empty($fechaNacimiento) || empty($pais)) {
                    $_SESSION['error_register'] = "Todos los campos son obligatorios.";
                    $_SESSION['error_register_js_trigger'] = true;
                    header("Location: " . BASE_URL); // Redirige a la página con el formulario
                    exit;
                }

                // --- Validar formato de email ---
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['error_register'] = "El formato del correo electrónico no es válido.";
                    $_SESSION['error_register_js_trigger'] = true;
                    header("Location: " . BASE_URL);
                    exit;
                }

                // --- Validar la contraseña ---
                $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\dñÑÁÉÍÓÚáéíóúüÜ@$!%*?&._\-]{8,}$/u';
                if (!preg_match($passwordRegex, $password)) {
                    $_SESSION['error_register'] = "La contraseña debe tener al menos 8 caracteres, mayúsculas (A-Z), minúsculas (a-z), un número (0-9) y puede contener ñ, acentos y ciertos símbolos.";
                    $_SESSION['error_register_js_trigger'] = true;
                    header("Location: " . BASE_URL);
                    exit;
                }

                // --- Encriptar la contraseña después de validarla ---
                $passwordHash = password_hash($password, PASSWORD_BCRYPT);

                // --- Validar la fecha de nacimiento ---
                $fechaNacimientoDate = DateTime::createFromFormat('Y-m-d', $fechaNacimiento);
                if (!$fechaNacimientoDate || $fechaNacimientoDate->format('Y-m-d') !== $fechaNacimiento) { // Chequeo extra de validez de fecha
                    $_SESSION['error_register'] = "La fecha de nacimiento no es válida.";
                    $_SESSION['error_register_js_trigger'] = true;
                    header("Location: " . BASE_URL);
                    exit;
                }
                $fechaActualObj = new DateTime(); // Renombrado para evitar confusión con $fechaActual de registro
                $edad = $fechaActualObj->diff($fechaNacimientoDate)->y;

                if ($edad < 13) {
                    $_SESSION['error_register'] = "Debes tener al menos 13 años para registrarte.";
                    $_SESSION['error_register_js_trigger'] = true;
                    header("Location: " . BASE_URL);
                    exit;
                }

                // Generar el username
                $usernameBase = strtolower(trim($nombre) . '.' . trim($apellidos));
                $usernameBase = preg_replace('/[^a-z0-9.]/', '', $usernameBase); // Solo letras minúsculas, números y puntos
                $usernameBase = preg_replace('/\.+/', '.', $usernameBase); // Reemplazar múltiples puntos con uno solo
                $username = substr($usernameBase, 0, 25);

                $fechaActual = date('Y-m-d H:i:s'); // Fecha de registro

                try {
                    // Verificar si el email ya existe
                    $sqlCheck = "SELECT id FROM usuarios WHERE email = :email";
                    $stmtCheck = $this->db->pdo->prepare($sqlCheck);
                    $stmtCheck->bindParam(':email', $email);
                    $stmtCheck->execute();
                    if ($stmtCheck->fetch()) {
                        $_SESSION['error_register'] = "Este correo electrónico ya está registrado.";
                        $_SESSION['error_register_js_trigger'] = true;
                        header("Location: " . BASE_URL);
                        exit;
                    }

                    // Insertar los datos en la base de datos
                    $sql = "INSERT INTO usuarios 
                            (nombre, email, fecha_registro, username, first_name, last_name, password, sign_up_date, fecha_nacimiento, pais, suscripcion) 
                            VALUES 
                            (:nombre, :email, :fecha_registro, :username, :first_name, :last_name, :password, :sign_up_date, :fecha_nacimiento, :pais, :suscripcion)";
                    $stmt = $this->db->pdo->prepare($sql);

                    $stmt->bindParam(':nombre', $nombre); // Podrías considerar si este es el nombre completo o solo el 'nombre de pila'
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':fecha_registro', $fechaActual);
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':first_name', $nombre); // Asumiendo que $nombre es el nombre de pila
                    $stmt->bindParam(':last_name', $apellidos);
                    $stmt->bindParam(':password', $passwordHash);
                    $stmt->bindParam(':sign_up_date', $fechaActual); // Es igual a fecha_registro, ¿son necesarias ambas?
                    $stmt->bindParam(':fecha_nacimiento', $fechaNacimiento);
                    $stmt->bindParam(':pais', $pais);
                    $stmt->bindParam(':suscripcion', $suscripcion);

                    if ($stmt->execute()) {
                        $_SESSION['user_id'] = $this->db->pdo->lastInsertId();
                        $_SESSION['user_email'] = $email;
                        $_SESSION['user_name'] = $nombre;
                        session_regenerate_id(true);

                        $_SESSION['success_register'] = "¡Registro exitoso! Ahora puedes iniciar sesión.";
                        $_SESSION['success_register_js_trigger'] = true; // <--- AÑADIR ESTO
                        header("Location: " . BASE_URL . "logged"); // <--- Corregido
                        exit;
                    } else {
                        $_SESSION['error_register'] = "Error: No se pudo registrar el usuario. Inténtalo más tarde.";
                        $_SESSION['error_register_js_trigger'] = true;
                        header("Location: " . BASE_URL);
                        exit;
                    }
                } catch (\PDOException $e) {
                    $_SESSION['error_register'] = "Error de base de datos. Inténtalo más tarde.";
                    $_SESSION['error_register_js_trigger'] = true;
                    header("Location: " . BASE_URL);
                    exit;
                }
            } else {
                 $_SESSION['error_register'] = "Error: El formulario no se envió correctamente.";
                 $_SESSION['error_register_js_trigger'] = true;
                 header("Location: " . BASE_URL);
                 exit;
            }
        } else {
    
            header("Location: " . BASE_URL);
            exit;
        }
    }
}
?>