<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="public/estilos.css">
</head>
<body>
    <h2>Listado de Productos</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Valor Total</th>
        </tr>
        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['nombre']) ?></td>
            <td><?= $p['cantidad'] ?></td>
            <td><?= number_format($p['precio_unitario'], 2) ?></td>
            <td><?= number_format($p['valor_total'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php?accion=registrar">Registrar nuevo producto</a>
</body>
</html>
