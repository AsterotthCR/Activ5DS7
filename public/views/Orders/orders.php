<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}


$name = $_SESSION['name'];
$lastname = $_SESSION['lastname'];

$selectedTable = isset($_GET['table']) ? $_GET['table'] : null;
$allData = [];

if ($selectedTable) {
    if ($selectedTable === 'orders') {
        $json = file_get_contents('http://actds7.test/orders');
        $allData = json_decode($json, true);
    }
    if ($selectedTable === 'customers') {
        $json = file_get_contents('http://actds7.test/customers');
        $allData = json_decode($json, true);
    }
    if ($selectedTable === 'employees') {
        $json = file_get_contents('http://actds7.test/employees');
        $allData = json_decode($json, true);
    }

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
    <title>Ordenes, Clientes y Empleados</title>
    <link rel="stylesheet" href="/assets/css/Orders/orders.css">
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
            <option value="customers" <?php if ($selectedTable === 'customers') echo 'selected'; ?>>Clientes</option>
            <option value="employees" <?php if ($selectedTable === 'employees') echo 'selected'; ?>>Empleados</option>
            <option value="orders" <?php if ($selectedTable === 'orders') echo 'selected'; ?>>Ordenes</option>
        </select>
        <button type="submit">Desplegar</button>
    </form>
    <?php if ($selectedTable === 'orders' && !empty($allData)): ?>
        <h2>Lista de Órdenes</h2>
        <table border="1">
            <tr>
                <th>Número de Orden</th>
                <th>Fecha de la orden</th>
                <th>Estado</th>
                <th>Comentarios</th>
                <th>Número del cliente</th>
            </tr>
            <?php foreach ($allData as $order): ?>
                <tr>
                    <td><?php echo $order['orderNumber']; ?></td>
                    <td><?php echo $order['orderDate']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                    <td><?php echo $order['comments']; ?></td>
                    <td><?php echo $order['customerNumber']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php elseif ($selectedTable === 'customers' && !empty($allData)): ?>
        <h2>Lista de Clientes</h2>
        <table border="1">
            <tr>
                <th>Código del Cliente</th>
                <th>Nombre del Cliente</th>
                <th>Telefono</th>
                <th>País</th>
            </tr>
            <?php foreach ($allData as $customer): ?>
                <tr>
                    <td><?php echo $customer['customerNumber']; ?></td>
                    <td><?php echo $customer['customerName']; ?></td>
                    <td><?php echo $customer['phone']; ?></td>
                    <td><?php echo $customer['country']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php elseif ($selectedTable === 'employees' && !empty($allData)): ?>
        <h2>Lista de Empleados</h2>
        <table border="1">
            <tr>
                <th>Código del Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Extensión</th>
                <th>Trabajo</th>
            </tr>
            <?php foreach ($allData as $employee): ?>
                <tr>
                    <td><?php echo $employee['employeeNumber']; ?></td>
                    <td><?php echo $employee['firstName']; ?></td>
                    <td><?php echo $employee['lastName']; ?></td>
                    <td><?php echo $employee['extension']; ?></td>
                    <td><?php echo $employee['jobTitle']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>