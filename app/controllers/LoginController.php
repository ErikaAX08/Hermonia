<?php

namespace App\Controllers;

use App\Core\ConexionBD;

class LoginController
{
    private $db;

    public function __construct()
    {
        $this->db = new ConexionBD();
    }

    // ✅ Función para manejar el inicio de sesión con depuración
    public function login()
    {
        echo "<pre>";
        var_dump($_POST);  // Verifica que los datos están llegando correctamente
        echo "</pre>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["emailLogin"] ?? null;
            $password = $_POST["passwordLogin"] ?? null;

            if (!$email || !$password) {
                echo "Error: Campos vacíos.";
                return;
            }

            try {
                $sql = "SELECT * FROM usuarios WHERE email = :email";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $usuario = $stmt->fetch();

                if ($usuario && password_verify($password, $usuario['password'])) {
                    // ✅ Inicio de sesión exitoso
                    session_start();
                    $_SESSION["user_id"] = $usuario["id"];
                    $_SESSION["user_email"] = $usuario["email"];
                    $_SESSION["user_name"] = $usuario["nombre"];

                    // Redirección a la página 'player'
                    header("Location: " . BASE_URL . "player");
                    exit;
                } else {
                    echo "Error: Credenciales incorrectas.";
                }
            } catch (\PDOException $e) {
                echo "Error de base de datos: " . $e->getMessage();
            }
        }
    }

    // Método para mostrar la vista de inicio de sesión
    public function index()
    {
        include BASE_VIEWS . 'player_view.php'; 
    }
}
