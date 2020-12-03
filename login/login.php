<?php
include "../app/app.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/app.css?v=0.2" media="all">
    <title>
        Login
    </title>
</head>

<body>
    <?php include "../layouts/alerts.template.php"; ?>

    <div class="login_container">
        <!-- Aqui empieza la barra de login de la pagina -->
        <div class="login_bar">
            <div class="logo_top">
                Logo Pagina
            </div>
            <h1 class="top_description">Las pelicuals que mas te gustan a tu alcance con un click</h1>
        </div>
        <!-- Aqui termina la barra de login de la pagina -->

        <!-- Aqui empieza el contenido del login de la pagina -->

        <form method="POST" action="../auth">
            <div class="content_login">
                <div class="data_login">
                    <h2 class="form_title">Inicia Sesion</h2>
                    <legend>Email o Numero de telefono</legend>
                    <input type="text" id="usuario" placeholder="Usuario" required="">
                    <legend>Contraseña</legend>
                    <input type="password" id="password" placeholder="Password" required="">


                    <button class="login_button2" type="submit">
                        <a href="../inicio/inicio.php">Iniciar Sesion</a>
                    </button>
                    <input type="hidden" name="action" value="login">
                    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">

                </div>
            </div>
        </form>
        <!-- Aqui termia el contenido del login de la pagina -->
    </div>
</body>

</html>