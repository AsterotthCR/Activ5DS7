<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Home</title>

    <link
      rel="shortcut icon"
      href="/assets/icons/icons8-zorro-48.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="public/assets/css/home.css">


    <script
      src="https://kit.fontawesome.com/ee26d7fa70.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <img class="logo" src="./assets/images/profile.png" alt="profile" title="profile" />
      <navbar class="cabecera-menu">
        <a href="#">Servicios</a>
        <a href="#"><?php echo "@username"; ?></a>
        <a href="#">Cerrar sesión</a>
      </navbar>
    </header>
  </body>
</html>
