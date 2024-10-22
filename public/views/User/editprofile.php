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
    <title>Actualizar datos</title>
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
    <h1>Actualiza tu perfil</h1>
    <div class="container">
        <form action="/profile/<?= $loggedUser['codUser']?>/edit" method="post">

            <div>
                <label for="username">Username <i class="fa-solid fa-user"></i></label>
                <input type="text" name="user" id="user" value="<?= $loggedUser['user']?>" required />
            </div>
            <div>
                <label for="password">password <i class="fa-solid fa-key"></i></label>
                <input type="text" name="password" id="password" value="<?= $loggedUser['password']?>" required />
            </div>
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="<?= $loggedUser['name']?>">
            </div>
            <div>
                <label for="lastname">Apellido</label>
                <input type="text" name="lastname" id="lastname" value="<?= $loggedUser['lastname']?>">
            </div>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>