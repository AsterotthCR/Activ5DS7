<!-- 
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
    <link rel="stylesheet" href="/index.css" />

    <script
      src="https://kit.fontawesome.com/ee26d7fa70.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <img class="logo" src="/assets/images/profile.png" alt="profile" title="profile" />
      <navbar class="cabecera-menu">
        <a href="#">Servicios</a>
        <a href="#">@Username</a>
        <a href="#">Cerrar sesión</a>
      </navbar>
    </header>
  </body>
</html> -->


<?php
session_start();

//Como el tema de sesiónes todavía no va redirigirá automáticamente a la pagina de login.php
header("Location: Pages/user/loginPage/login.php");
exit;
// // Verificar si la sesión está activa
// if (!isset($_SESSION['codUser'])) {
//     // Si no está iniciada la sesión, redirigir a la página de login
//     header("Location: /Pages/user/loginPage/login.php");
//     exit;
// }

// Aquí puedes agregar código para mostrar el nombre completo del usuario si es necesario
// Por ejemplo:
// $username = $_SESSION['username'];  // O cualquier otro dato que quieras mostrar
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
    <link rel="stylesheet" href="./index.css" />

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
