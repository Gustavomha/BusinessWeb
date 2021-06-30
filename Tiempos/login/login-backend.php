<?php

$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;

session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect('localhost', 'root', '12345678','rol');

$consulta = "SELECT * FROM usuarios WHERE  Usuario = '$usuario' and clave = '$password'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if($filas['id_cargo'] == 1){ //admin
    header ('location: http://localhost/masterphp/Fabrica.cl/Tiempos/tiempos.php');  
    
}else
if($filas['id_cargo'] == 2){//cliente
    header('location: http://localhost/masterphp/Fabrica.cl/Tiempos/tiempos.php');
}
else{
    ?>
    <?php 
    include("login.php");
    ?>
    <p class="alerta alerta-error">Error en login favor comunicarse con administrador para generar cuenta</p>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
