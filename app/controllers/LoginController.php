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
                //Verificar si el usuario existe
                $sql = "SELECT * FROM usuarios WHERE email = :email";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $usuario = $stmt->fetch();

                  // Mostrar información del usuario encontrado
                    echo "Usuario encontrado en la base de datos:";
                    echo "<pre>";
                    print_r($usuario);
                    echo "</pre>";

                if ($usuario) {
                    //Verificar la contraseña
                    $password_hash = $usuario['password'];
                    $password_verify = password_verify($password, $password_hash);

                    echo "Resultado de password_verify: " . ($password_verify ? "true" : "false") . "\n";
                   
                    if($password_verify) {
                        // Iniciar sesión
                        session_start();
                        $_SESSION['user_id'] = $usuario['id'];
                        $_SESSION['user_email'] = $usuario['email'];
                        $_SESSION['user_name'] = $usuario['nombre'];
                        
                        //Verificar que la sesion se guardó correctamente
                        echo "Sesión iniciada correctamente:";
                        echo "<pre>";
                        print_r($_SESSION);
                        echo "</pre>";

                        // Redirigir a la página de 'player'
                        header("Location: " . BASE_URL . "player");
                        exit;
                    } else {
                        echo "Error: Contraseña incorrecta.";
                    }
                } else {
                    echo "Error: Credenciales incorrectas.";
                    if ($usuario) {
                        echo "\nContraseña almacenada (hash):";
                        echo "<pre>";
                        print_r($usuario['password']);
                        echo "</pre>";
                    }
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
