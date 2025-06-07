<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
        require_once 'controllers/ProductoController.php';

        $controlador = new ProductoController();

        $accion = $_GET['accion'] ?? 'listar';

        if (method_exists($controlador, $accion)) {
            $controlador->$accion();
        } else {
            echo "Accion no valida";
        }
    ?>

</body>
</html>
