<?php
require_once 'models/Producto.php';

class ProductoController {
    private $producto;

    public function __construct() {
        $this->producto = new Producto();
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio_unitario'];
            $this->producto->registrar($nombre, $cantidad, $precio);
            header("Location: index.php?accion=listar");
            exit;
        }
        include 'views/registrar_producto.php';
    }

    public function listar() {
        $productos = $this->producto->listar();
        include 'views/listar_productos.php';
    }
}

