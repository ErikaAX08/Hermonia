<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\ConexionBD;

class PlayerController extends Controller {
    private $db;

    public function __construct() {
        $this->db = new ConexionBD();
    }

    public function index() {
       //Verificar sesion
       if (!isset($_SESSION['user_id'])) {
            echo "Error: No hay sesión activa.";
            echo "<pre>";
            print_r($_SESSION);  
            echo "</pre>";
            header("Location: " . BASE_URL . "player");
            exit;
        }

        // Recuperar los datos del usuario
        $userId = $_SESSION['user_id'];
        $sqlUser = "SELECT * FROM usuarios WHERE id = :id";
        $stmtUser = $this->db->pdo->prepare($sqlUser);
        $stmtUser->bindParam(':id', $userId);
        $stmtUser->execute();

        $user = $stmtUser->fetch();
        if (!$user) {
            echo "Error: Usuario no encontrado en la base de datos.";
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
            exit;
        }

        // Recuperar los datos de los artistas
        $sqlArtists = "SELECT * FROM artistas";
        $stmtArtists = $this->db->pdo->query($sqlArtists);
        $artists = $stmtArtists->fetchAll();

        //Pasar los datos a la vista
        $data = [
            'user' => $user,
            'artists' => $artists
        ];

            // Mostrar los datos para depuración
            echo "<pre>";
            print_r($data);
            echo "</pre>";

        // Pasar los datos a la vista
        $this->view('player', $data);
    }
}