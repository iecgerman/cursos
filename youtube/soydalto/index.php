<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="estilo.css">
      <title>Registrar Usuario</title>
</head>
<body>
      <form method="POST">
            <h1>Suscribete</h1>
            <input type="text" name="name" placeholder="Nombre Completo">
            <input type="email" name="email" placeholder="Correo">
            <input type="submit" name="register">
      </form>
            <?php
            include("registrar.php");
            ?>
</body>
</html>