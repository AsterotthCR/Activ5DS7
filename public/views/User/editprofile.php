<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
</head>
<body>
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