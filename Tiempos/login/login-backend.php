<?php
//iniciar la sesion y la conexion a bd
require_once '../register/includes/conexion.php';
require_once '../register/includes/helpers.php';

//recoger el formulario
if(isset($_POST)){

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //consula para comprobar las credenciales
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);

        //comprobar contraseña
        $verify = password_verify($password, $usuario['password']) ;

        if($verify){
            //utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

            if(isset($_SESSION['error_login'])){
                session_unset();
            }

        }else{
            $_SESSION['error_login'] = 'Login incorrecto';
        }

    }else{
        $_SESSION['error_login'] = 'Login incorrecto';
    } 
}

header('location: http://localhost/masterphp/Fabrica.cl/Tiempos/tiempos.php');