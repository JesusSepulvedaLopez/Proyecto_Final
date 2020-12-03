<?php
include "../app/app.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/app.css?v=0.1" media="all">
    <title>
        Movies
    </title>
</head>

<body>
    <?php include "../layouts/alerts.template.php"; ?>
    <div class="login_container">
        <!-- Aqui empieza la barra de la pagina -->
        <div class="login_bar">
            <div class="logo_top">
                Logo Pagina
            </div>
        </div>
        <!-- Aqui termina la barra de la pagina -->

        <!-- Aqui empieza el contenido del formulario de registro de la pagina -->
        <form method="POST" action="../auth">
            <div class="content_registry">
                <div class="registration_form">
                    <h2 class="form_title">Registrarse</h2>
                    <legend>Nombre(s)</legend>
                    <input type="text" name="name" placeholder="Nombre" class="user_info" required="">
                    <legend>Apellido(s)</legend>
                    <input type="text" name="lastname" placeholder="Apellido" class="user_info">
                    <legend>Correo Electronico</legend>
                    <input type="email" name="email" placeholder="Email" class="user_info" required="">
                    <legend>Celular</legend>
                    <input type=" text" name="phone_number" placeholder="Numero Celular" class="user_info" required="">
                    <legend>Contraseña</legend>
                    <input type="password" name="password" placeholder="Contraseña" class="user_info" required="">
                    <!-- <legend>Confirmar Contraseña</legend>
                    <input type="password" name="password2" placeholder="Contraseña" class="user_info"> -->

                    <button class="register_button2" type="submit">
                        <a href="">Registrarse</a>
                    </button>
                    <input type="hidden" name="action" value="register">
                    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                </div>
            </div>
        </form>
        <!-- Aqui empieza el contenido del formulario de registro de la pagina -->
    </div>
</body>

</html>