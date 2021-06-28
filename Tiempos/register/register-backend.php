<?php 


if(isset($_POST)){

    //conexion bbdd
    require_once './includes/conexion.php';

    if(!isset($_SESSION)){
        session_start();
    }
    

    $name = isset($_POST['name']) ? mysqli_real_escape_string($db , $_POST['name']) : false;
    $lastname = isset($_POST['lastname']) ?  mysqli_real_escape_string($db ,$_POST['lastname']) : false;
    $email = isset($_POST['email']) ?  mysqli_real_escape_string($db , trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ?  mysqli_real_escape_string($db ,$_POST['password']) : false;

    $errores = array();

    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $name_validation = true;
    }else{
        $name_validation = false;
        $errores['name'] = "error en nombre";
    }

    if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)){
        $lastname_validation = true;
    }else{
        $lastname_validation = false;
        $errores['lastname'] = "error en apellido";
    }

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validation = true;
    }else{
        $email_validation = false;
        $errores['email'] = 'email error';
    }

    if(!empty($password)){
        $password_validation = true;
    }else{
        $password_validation = false;
        $errores['password'] = "error en contraseña";
    }

    $save_user = false;
    if(count($errores) == 0){
        $save_user = true;
        
        //cifrar
        $password_security = password_hash($password,  PASSWORD_BCRYPT) ;
        
        //insertar
        $sql = "INSERT INTO usuarios VALUES(null, '$name', '$lastname', '$email', '$password_security', CURDATE());" ;
        $guardar = mysqli_query($db, $sql);

        
        

        if($guardar){
            $_SESSION['completado'] = "el registro es exitoso";
        }else{
            $_SESSION['errores']['general'] = "fallo al guardar usuario";
        }
    
    
    }else{
        $_SESSION['errores'] = $errores;
        
    }

}
header('location: http://localhost/masterphp/Fabrica.cl/Tiempos/register/register.php');
   

