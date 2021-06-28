<?php require_once './includes/conexion.php'; ?>
<?php require_once './includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-tiempos</title>
    <link rel="stylesheet" type="text/css" href="./assets-register/style-register.css">
</head>

<body>
    <header id="header">
        <div class="logo">
            <h3><a href="http://localhost/masterphp/Fabrica.cl/">FABRICA TECHNOLOGY</a></h3>
        </div>
    </header>


    <!--Login-->
    <div class="formulario">

        <!--mostrar errores-->
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general'] ?>
            </div>
        <?php endif; ?>

        <div class="block">
            <form method="POST" action="http://localhost/masterphp/Fabrica.cl/Tiempos/register/register-backend.php">
                <label for="name">Nombre</label>
                <input type="text" name="name">
                <?php echo isset($_SESSION['errores']) ?  MostrarErrores($_SESSION['errores'], 'name') : ''; ?>

                <label for="lastname">Apellido</label>
                <input type="text" name="lastname">
                <?php echo isset($_SESSION['errores']) ?  MostrarErrores($_SESSION['errores'], 'lastname') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email">
                <?php echo isset($_SESSION['errores']) ?  MostrarErrores($_SESSION['errores'], 'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?php echo isset($_SESSION['errores']) ?  MostrarErrores($_SESSION['errores'], 'password') : ''; ?>

                <input type="submit" name="submit" valude="enviar">
            </form>
            <?php BorrarErrores(); ?>

        </div>
    </div>

    <div class="login">
        <h3><a href="http://localhost/masterphp/Fabrica.cl/Tiempos/login/login.php">Inicia Sesion</a></h3>
    </div>

</body>

</html>