
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-tiempos</title>
    <link rel="stylesheet" type="text/css" href="./Assets-login/style-login.css">
</head>

<body>
    <header id="header">
        <div class="logo">
            <h3><a href="http://localhost/masterphp/Fabrica.cl/">FABRICA TECHNOLOGY</a></h3>
        </div>
    </header>

    <!--Login-->
   
    <?php if(isset($_SESSION['error_login'])) : ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['error_login'] ; ?>
        </div>
    <?php endif; ?>

    <div class="formulario">
        <div class="block">
            <form action="http://localhost/masterphp/Fabrica.cl/Tiempos/login/login-backend.php" method="POST">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" name="submit" valude="enviar">
            </form>
        </div>
    </div>


</body>

</html>

