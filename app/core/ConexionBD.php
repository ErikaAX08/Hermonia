<?php

namespace App\Core;

use PDO;
use PDOException;

class ConexionBD {
    private $host = 'localhost';
    private $port = '3306'; // Puerto por defecto para MySQL
    private $db = 'hermonia';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    public $pdo;

    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=$this->charset";
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa a la base de datos"; // Mensaje de depuración
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
?>