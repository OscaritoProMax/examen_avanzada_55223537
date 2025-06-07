<?php

require_once 'config/database.php';

class Producto {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function registrar($nombre, $cantidad, $precio) {
        $sql = "INSERT INTO productos (nombre, cantidad, precio_unitario) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre, $cantidad, $precio]);
    }

    public function listar() {
        $sql = "SELECT *, cantidad * precio_unitario AS valor_total FROM productos";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
