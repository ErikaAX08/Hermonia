<?php

namespace App\Core;

use PDO;
use PDOException;

class ConexionBD {
    private $host;
    private $port;
    private $db;
    private $user;
    private $pass;
    private $charset;
    public $pdo;

    public function __construct() {
        $this->loadConfig();

        try {
            $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=$this->charset";
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
     * Carga la configuración desde el archivo app.php
     */
    private function loadConfig() {
        $configFile = __DIR__ . '/../../app/config/app.php';

        if (file_exists($configFile)) {
            $config = require $configFile;

            // Obtener configuración de la base de datos
            if (isset($config['database'])) {
                $dbConfig = $config['database'];

                $this->host = $dbConfig['host'] ?? 'localhost';
                $this->port = $dbConfig['port'] ?? '3306';
                $this->db = $dbConfig['database'] ?? 'hermonia';
                $this->user = $dbConfig['username'] ?? 'root';
                $this->pass = $dbConfig['password'] ?? '';
                $this->charset = $dbConfig['charset'] ?? 'utf8mb4';
            } else {
                // Usar valores predeterminados si no hay configuración de base de datos
                $this->setDefaultValues();
            }
        } else {
            // Usar valores predeterminados si no existe el archivo de configuración
            $this->setDefaultValues();
        }
    }

    /**
     * Establece valores predeterminados para la conexión a la base de datos
     */
    private function setDefaultValues() {
        $this->host = 'localhost';
        $this->port = '3306';
        $this->db = 'hermonia';
        $this->user = 'root';
        $this->pass = '';
        $this->charset = 'utf8mb4';
    }
}
?>