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
            // Cambiar esta línea para redirigir a home en vez de player
            header('Location: ' . BASE_URL . 'home');
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

        //Inicializar el array de IDs de canciones ya mostradas si no existe
        if(!isset($_SESSION['shown_songs'])) {
            $_SESSION['shown_songs'] = [];
        }

        // Verificamos si hay canciones ya mostradas y que sean valores válidos
        $validShownSongs = array_filter($_SESSION['shown_songs'], function($id) {
            return is_numeric($id) && $id > 0;
        });

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
        ";

         // Agregamos la condición solo si hay canciones válidas ya mostradas
        if (!empty($validShownSongs)) {
            $placeholders = implode(',', $validShownSongs);
            $sqlSongs .= " WHERE canciones.id NOT IN ($placeholders)";
        }

         // Completamos la consulta con el orden aleatorio y límite
        $sqlSongs .= " ORDER BY RAND() LIMIT 10";

        $stmtSongs = $this->db->pdo->query($sqlSongs);
        $songs = $stmtSongs->fetchAll();

        // Si no hay suficientes canciones nuevas o si todas ya fueron mostradas
            if (count($songs) < 1) {
                // Reseteamos la lista de canciones mostradas
                $_SESSION['shown_songs'] = [];
                
                // Consulta sin restricciones para obtener todas las canciones aleatoriamente
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
                    ORDER BY RAND()
                    LIMIT 10
                ";
                $stmtSongs = $this->db->pdo->query($sqlSongs);
                $songs = $stmtSongs->fetchAll();
            }

        foreach ($songs as $song){
            if(!in_array($song['song_id'],$_SESSION['shown_songs'])){
                $_SESSION['shown_songs'][] = $song['song_id'];
            }
        }

        // Pasar los datos del usuario a la vista
        $this->view('player', [
            'user' => $user,
            'songs' => $songs,
        ]);

    }
}