<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="Register de pagina web, trabajada con html, css, js y php" />
    <meta name="author" content="Giovanny, Kristopher, Shean, Diego" />
    <title>Register</title>
    <link
        rel="shortcut icon"
        href="./icons8-zorro-48.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/Users/register.css">
    <script
        src="https://kit.fontawesome.com/ee26d7fa70.js"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="cabecera">
        <img class="logo" src="../../../assets/images/profile.png" alt="profile" title="profile" />
        <h2>Registrar un nuevo usuario!</h2>
    </div>
    <div class="container">
        <form action="/register" method="post">

            <div>
                <label for="user">Username <i class="fa-solid fa-user"></i></label>
                <input type="text" name="user" id="user"  placeholder="Danos un nombre de usuario" required />
            </div>
            <div>
                <label for="password">password <i class="fa-solid fa-key"></i></label>
                <input type="password" name="password" id="password" placeholder="Escribe tu contraseña (una facil no estaría mal :) )" required />
            </div>
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Escribe tu nombre de pila">
            </div>
            <div>
                <label for="lastname">Apellido</label>
                <input type="text" name="lastname" id="lastname" placeholder="Escribe tu apellido">
            </div>
            <button type="submit">Registarse</button>
        </form>
        <p class="mes">Espera... ¿Ya estabas registrado?</p>
        <button class="toLogin"><a href="/login">Inicia sesión con tu usuario</a></button>
    </div>
</body>

</html>