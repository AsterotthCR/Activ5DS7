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
  <meta charset="UTF-8" />
  <title>Home</title>

  <link
    rel="shortcut icon"
    href="/assets/icons/icons8-zorro-48.png"
    type="image/x-icon" />



<link rel="stylesheet" href="./assets/css/Home/HomeView.css">
  <script
    src="https://kit.fontawesome.com/ee26d7fa70.js"
    crossorigin="anonymous"></script>
</head>

<body>
<header>
    <img class="logo" src="./assets/images/profile.png" alt="profile" title="logo" />
    <navbar class="cabecera-menu">
      <?php if (isset($_SESSION['user_id'])): ?>
        <a href="/profile/<?php echo $_SESSION['user_id']; ?>"><?php echo $name; ?></a>
        <a href="/logout">Cerrar Sesión</a>
      <?php else: ?>
        <a href="/login">Inicio de Sesión</a>
      <?php endif; ?>
    </navbar>
  </header>
  <main>
    <section class="welcome">
      <div class="title">
      <h1>Bienvenido, <?php echo $name . ' ' . $lastname; ?></h1>
        <div class="underline"></div>
      </div>
    </section>

    <div class="container">
    <img src="assets/images/aYellowBike.png">
      <img src="assets/images/orangeMustang.png">
      <img src="assets/images/redMotor.png">
      <img src="assets/images/ship.png">
      <img src="assets/images/beetle.png">
      <img src="assets/images/train.png">
    </div>

    <section class="main-content">
      <h2>Consultas</h2>
      <button type="button" class="btn-Products">Ver Productos</button>
      <button type="button" class="btn-Orders">Ver Ordenes</button>
    </section>
  </main>

  <script src="assets/js/Home/HomeView.js" type="module"></script>
</body>

</html>