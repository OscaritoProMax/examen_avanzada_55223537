<!DOCTYPE html>
<html>
<head>
    <title>Registrar Producto</title>
    <link rel="stylesheet" href="public/estilos.css">
</head>
<body>
    <h2>Registrar Producto</h2>
    <form method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br>
        <label>Cantidad:</label><br>
        <input type="number" name="cantidad" required><br>
        <label>Precio Unitario:</label><br>
        <input type="number" step="0.01" name="precio_unitario" required><br><br>
        <input type="submit" value="Registrar">
    </form>
    <br>
    <a href="index.php?accion=listar">Ver listado de productos</a>
</body>
</html>
