<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del usurio</title>
</head>
<body>
    <h1>esto es el perfil del usuario</h1>
    <p>Nombre: <?= $loggedUser['name'] ?></p>
    <p>Apellido: <?= $loggedUser['lastname'] ?></p>
</body>
</html>