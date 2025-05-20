<?php

namespace App\Controllers;

use App\Core\ConexionBD;
use App\Core\Controller;
use \PDOException;

class LoginController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new ConexionBD();
    }

    public function login() // Este método maneja el POST del formulario de login
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user_id'])) {
            header("Location: " . BASE_URL . "player");
            exit;
        }

        $error_message = null; 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = trim($_POST["emailLogin"] ?? '');
            $password = $_POST["passwordLogin"] ?? '';

            if (empty($email) || empty($password)) {
                $error_message = 'Por favor, ingresa tu correo y contraseña.';
            } else {
                try {
                    $sql = "SELECT id, email, nombre, password FROM usuarios WHERE email = :email";
                    $stmt = $this->db->pdo->prepare($sql);
                    $stmt->bindParam(':email', $email);
                    $stmt->execute();
                    $usuario = $stmt->fetch();

                    if ($usuario) {
                        if (password_verify($password, $usuario['password'])) {
                            $_SESSION['user_id'] = $usuario['id'];
                            $_SESSION['user_email'] = $usuario['email'];
                            $_SESSION['user_name'] = $usuario['nombre'];

                            session_regenerate_id(true);

                            header("Location: " . BASE_URL . "player");
                            exit;
                        } else {
                            $error_message = 'El correo electrónico o la contraseña son incorrectos.';
                        }
                    } else {
                        $error_message = 'El correo electrónico o la contraseña son incorrectos.';
                    }
                } catch (PDOException $e) {
                    // En un entorno real, loguearías este error: error_log($e->getMessage());
                    $error_message = 'Ocurrió un problema. Por favor, intenta más tarde.';
                }
            }
            // --- CAMBIO AQUÍ ---
            // Mostrar la vista 'home' nuevamente con el mensaje de error si existe
            $this->view('home', ['error_login' => $error_message]); // Usamos 'error_login' para no colisionar con otros posibles errores en home
            return; 
        }

        // --- CAMBIO AQUÍ ---
        // Si no es POST o si es la primera carga, mostrar formulario de login (que está en 'home')
        // Si se llega aquí por GET a /login/login (o la ruta que lleve a este método)
        // también se mostrará 'home'. Considera si esto es lo que quieres o si
        // el método 'index' es el único que debe mostrar el login inicialmente.
        $this->view('home', ['error_login' => null]); // Sin error al cargar por primera vez vía este método
    }

    public function index() // Este método usualmente maneja la carga inicial de la página de login (GET /login)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user_id'])) {
            header("Location: " . BASE_URL . "player");
            exit;
        }

        // --- CAMBIO AQUÍ ---
        // Mostrar la vista 'home', que contiene el modal de login
        $this->view('home', ['error_login' => null]); // Pasamos null o un array vacío si no hay error que mostrar inicialmente
    }

    public function logout()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION = [];

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();

        header("Location: " . BASE_URL . "login"); // Asumo que /login te lleva a LoginController@index
        exit;
    }
}