<?php

namespace App\Controllers;

use App\Core\ConexionBD;
use App\Core\Controller;

class LoginController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new ConexionBD();
    }
    
    public function login()
    {
        // Iniciar sesión
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        // Si ya hay una sesión activa, redirigir a player
        if (isset($_SESSION['user_id'])) {
            header("Location: " . BASE_URL . "player");
            exit;
        }
        
        // Depuración (quitar en producción)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<pre>";
            var_dump($_POST);
            echo "</pre>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["emailLogin"] ?? null;
            $password = $_POST["passwordLogin"] ?? null;

            if (!$email || !$password) {
                echo "Error: Campos vacíos.";
                // Mostrar la vista de login nuevamente
                $this->view('login', ['error' => 'Campos vacíos']);
                return;
            }

            try {
                // Verificar si el usuario existe
                $sql = "SELECT * FROM usuarios WHERE email = :email";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $usuario = $stmt->fetch();

                // Depuración (quitar en producción)
                if ($usuario) {
                    echo "Usuario encontrado en la base de datos:";
                    echo "<pre>";
                    print_r($usuario);
                    echo "</pre>";
                }

                if ($usuario) {
                    // Verificar la contraseña
                    $password_hash = $usuario['password'];
                    $password_verify = password_verify($password, $password_hash);

                    // Depuración (quitar en producción)
                    echo "Resultado de password_verify: " . ($password_verify ? "true" : "false") . "\n";
                   
                    if($password_verify) {
                        // Iniciar sesión
                        $_SESSION['user_id'] = $usuario['id'];
                        $_SESSION['user_email'] = $usuario['email'];
                        $_SESSION['user_name'] = $usuario['nombre'];
                        
                        // Depuración (quitar en producción)
                        echo "Sesión iniciada correctamente:";
                        echo "<pre>";
                        print_r($_SESSION);
                        echo "</pre>";

                        // Redirigir a la página de 'player'
                        header("Location: " . BASE_URL . "player");
                        exit;
                    } else {
                        echo "Error: Contraseña incorrecta.";
                        $this->view('login', ['error' => 'Contraseña incorrecta']);
                        return;
                    }
                } else {
                    echo "Error: Credenciales incorrectas.";
                    $this->view('login', ['error' => 'Credenciales incorrectas']);
                    return;
                }
            } catch (\PDOException $e) {
                echo "Error de base de datos: " . $e->getMessage();
                $this->view('login', ['error' => 'Error de base de datos']);
                return;
            }
        }
        
        // Si no es POST, mostrar formulario de login
        $this->view('login', []);
    }

    // Método para mostrar la vista de inicio de sesión
    public function index()
    {
        // Iniciar sesión
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        // Si ya hay una sesión activa, redirigir a player
        if (isset($_SESSION['user_id'])) {
            header("Location: " . BASE_URL . "player");
            exit;
        }
        
        // Mostrar la vista de login, no la de player
        $this->view('login', []);
    }
    
    // Método para cerrar sesión
    public function logout()
    {
        // Iniciar sesión si no está iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        // Destruir todas las variables de sesión
        $_SESSION = [];
        
        // Destruir la cookie de sesión
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        // Finalmente, destruir la sesión
        session_destroy();
        
        // Redirigir al login
        header("Location: " . BASE_URL . "login");
        exit;
    }
}