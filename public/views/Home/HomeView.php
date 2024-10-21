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
    <link rel="stylesheet" href="views/Home/homeView.css">


    <script
      src="https://kit.fontawesome.com/ee26d7fa70.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <img class="logo" src="./assets/images/profile.png" alt="profile" title="logo" />
      <navbar class="cabecera-menu">
        <a href="#"><?php echo "@username"; ?></a>
        <a href="#">Cerrar sesión</a>
      </navbar>
    </header>
    <main>
      <section class="welcome">
        <h1>Bienvenido @name @apellido</h1>
        <img src="/assets/images/orangeMustang.png" alt="foto de perfil" title="Orange Mustang" class="profile-image">
      </section>
      <section class="main-content">
        <h2>Consultas</h2>
        <form action="post" action="">
          <label for="table">Selecciona una tabla</label>
          <select name="table" id="table-select">
            <option value="Products">Productos</option>
            <option value="Orders">Ordenes</option>
          </select>
          <button type="submit" class="btn-enviar">Consultar Información</button>
        </form>
      </section>
    </main>

    <script src="views/Home/HomeView.js" type="module"></script>
  </body>
</html>
