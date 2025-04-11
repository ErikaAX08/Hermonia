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
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL . 'player');
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
            
            // Si el usuario no existe, cerrar sesión y redirigir a login
            session_destroy();
            header("Location: " . BASE_URL . "home");
            exit;
        }

          // Recuperar las canciones y sus relaciones
        $sqlSongs = "
            SELECT 
                canciones.id AS song_id,
                canciones.title AS song_title,
                canciones.duracion AS song_duration,
                canciones.path AS song_path,
                albums.title AS album_title,
                albums.artwork_path AS album_artwork,
                artists.name AS artist_name
            FROM canciones
            INNER JOIN albums ON canciones.album_id = albums.id
            INNER JOIN artists ON canciones.artista_id = artists.id
            ORDER BY canciones.id;
        ";
        $stmtSongs = $this->db->pdo->query($sqlSongs);
        $songs = $stmtSongs->fetchAll();

        // Pasar los datos del usuario a la vista
        $this->view('player', [
            'user' => $user,
            'songs' => $songs,
        ]);
    }
}