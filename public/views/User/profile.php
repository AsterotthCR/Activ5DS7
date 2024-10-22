<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit;
}


$name = $_SESSION['name'];
$lastname = $_SESSION['lastname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del usurio</title>
    <link rel="stylesheet" href="/assets/css/Users/editprofile.css">
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
    <h1>esto es el perfil del usuario</h1>
    <p>Nombre: <?= $loggedUser['name'] ?></p>
    <p>Apellido: <?= $loggedUser['lastname'] ?></p>

    <a href="/profile/<?= $loggedUser['codUser']?>/edit"><button>Editar perfil</button></a>
</body>
</html>