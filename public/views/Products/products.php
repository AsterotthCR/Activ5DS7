<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}


$name = $_SESSION['name'];
$lastname = $_SESSION['lastname'];
// Obtener la tabla seleccionada en el formulario
$selectedTable = isset($_GET['table']) ? $_GET['table'] : null;
$allData = [];


if ($selectedTable) {
    if ($selectedTable === 'products') {
        $json = file_get_contents('http://actds7.test/products');
        $allData = json_decode($json, true);
    } elseif ($selectedTable === 'productlines') {
        // Consumir el endpoint de líneas de productos
        $json = file_get_contents('http://actds7.test/productlines');
        $allData = json_decode($json, true);
    }

    // Verificar si los datos se obtuvieron correctamente
    if ($allData === null) {
        echo "Error al obtener los datos.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos y Líneas de Productos</title>
    <link rel="stylesheet" href="/assets/css/Products/products.css">
</head>

<body>
    <header>
        <img class="logo" src="/assets/images/profile.png" alt="profile" title="logo" />
        <navbar class="cabecera-menu">
            <a href="/">Inicio</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="/profile/<?php echo $_SESSION['user_id']; ?>"><?php echo $name; ?></a>
                <a href="/logout">Cerrar Sesión</a>
            <?php else: ?>
                <a href="/login">Inicio de Sesión</a>
            <?php endif; ?>
        </navbar>
    </header>
    <form method="get">
        <label for="table">Selecciona una tabla:</label>
        <select name="table" id="table">
            <option value="products" <?php if ($selectedTable === 'products') echo 'selected'; ?>>Productos</option>
            <option value="productlines" <?php if ($selectedTable === 'productlines') echo 'selected'; ?>>Líneas de Productos</option>
        </select>
        <button type="submit">Desplegar</button>
    </form>

    <!-- Mostrar los resultados de la tabla seleccionada -->
    <?php if ($selectedTable === 'products' && !empty($allData)): ?>
        <h2>Lista de Productos</h2>
        <table border="1">
            <tr>
                <th>Códgo del producto</th>
                <th>Nombre del producto</th>
                <th>Linea de Productos</th>
                <th>Escala de Producto</th>
                <th>Vendedor</th>
                <th>Precio de Compra</th>

            </tr>
            <?php foreach ($allData as $product): ?>
                <tr>
                    <td><?php echo $product['productCode']; ?></td>
                    <td><?php echo $product['productName']; ?></td>
                    <td><?php echo $product['productLine']; ?></td>
                    <td><?php echo $product['productScale']; ?></td>
                    <td><?php echo $product['productVendor']; ?></td>
                    <td><?php echo $product['buyPrice']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php elseif ($selectedTable === 'productlines' && !empty($allData)): ?>
        <h2>Lista de Líneas de Productos</h2>
        <table border="1">
            <tr>
                <th>Línea de Productos</th>
                <th>Descripción de la Linea</th>
            </tr>
            <?php foreach ($allData as $line): ?>
                <tr>
                    <td><?php echo $line['productLine']; ?></td>
                    <td><?php echo $line['textDescription']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>