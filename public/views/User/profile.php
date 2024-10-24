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
  <link rel="stylesheet" href="/assets/css/Users/profile.css">

</head>

<body>
  <header>
    <img class="logo" src="/assets/images/profile.png" alt="logo" title="logo" />
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
  <div class="card-container">
    <h1>El perfil de <?= $loggedUser['name'] ?> </h1>
    <img src="/assets/images/profile.png" class="image-profile" alt="Profile" title="profile">
    <p>Nombre: <?= $loggedUser['name'] ?></p>
    <p>Apellido: <?= $loggedUser['lastname'] ?></p>
  </div>

  <a href="/profile/<?= $loggedUser['codUser'] ?>/edit"><button>Editar perfil</button></a>
</body>

</html>