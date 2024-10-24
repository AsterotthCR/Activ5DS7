<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Login de pagina web, trabajada con html, css, js y php" />
  <meta name="author" content="Giovanny, Kristopher, Shean, Diego" />
  <title>Login</title>
  <link
    rel="shortcut icon"
    href="./icons8-zorro-48.png"
    type="image/x-icon" />

  <link rel="stylesheet" href="assets/css/Users/login.css">
  <script
    src="https://kit.fontawesome.com/ee26d7fa70.js"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="cabecera">
    <img class="logo" src="../../../assets/images/profile.png" alt="profile" title="profile" />
    <h2>Hola Bienvenido a nuestra web</h2>
  </div>
  <div class="container">
    <form action="/login" method="post">
      <label for="username">Username <i class="fa-solid fa-user"></i></label>
      <input
        type="text"
        name="user"
        id="username"
        placeholder="username..."
        required />

      <label for="password">Password <i class="fa-solid fa-key"></i></label>
      <input
        type="password"
        name="password"
        id="password"
        placeholder="password..."
        required />

      <button type="submit">Iniciar Sesión</button>

    </form>

    <p class="mes">¿No tienes un usuario? Regístrate YA!</p>
    <button class="toRegister"><a href="/register">Registrar un nuevo usuario</a></button>
  </div>
</body>

</html>