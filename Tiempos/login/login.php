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
    <div class="formulario">
        <div class="block">
            <form method="POST" action="http://localhost/masterphp/Fabrica.cl/Tiempos/tiempos.php">
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" name="submit" valude="enviar">
            </form>

        </div>
    </div>

    <div class="register">
        <a href="http://localhost/masterphp/Fabrica.cl/Tiempos/login/register.php">Registrate aqui</a>
    </div>

</body>

</html>