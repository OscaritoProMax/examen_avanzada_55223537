<?php
class Database {
    private $host = 'localhost';
    private $db = 'inventario_db';
    private $user = 'root';
    private $pass = '';
    private $conn;

    public function conectar() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }
}

