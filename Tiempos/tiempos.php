<?php
require_once './login/login.php';
//TIEMPOS DE PENDRIVES EN MINUTOS
//TIEMPO DE PENDRIVE IMAGEN CORPORATIVA:
$t_Corporativo = 40;
//TIEMPO DE PENDRIVE IKEA:
$t_ikea = 45;
//TIEMPO DE PENDRIVE CMR:
$t_cmr = 40;

//PENDRIVES T490 DISPONIBLES:
$p_Corporativo = 8;
//PENDRIVES IKEA DISPONIBLES:
$p_ikea = 8;
//PENDRIVES CMR DISPONIBLES:
$p_cmr = 8;




$resultado = false;
if (isset($_POST['cantidad'])) {

    //variable super global POST [cantidad] convertida a variable simple
    $cantidad = $_POST['cantidad'];


    //VERIFICACION DE IMAGEN CORPORATIVA
    if (isset($_POST['Corporativo'])) {

        $corporativo = $_POST['Corporativo'];


        if ($cantidad >= 1 && $cantidad <= $p_Corporativo) {
            $resultado = $t_Corporativo;
            
        }if ($cantidad > $p_Corporativo && $cantidad <= $p_Corporativo * 2) {
            $resultado = $t_Corporativo * 2;
            
        }if ($cantidad > $p_Corporativo * 2 && $cantidad <= $p_Corporativo * 3) {
            $resultado = $t_Corporativo * 3;
            
        }if ($cantidad > $p_Corporativo * 3 && $cantidad <= $p_Corporativo * 4) {
            $resultado = $t_Corporativo * 4;
            
        }if ($cantidad > $p_Corporativo * 4 && $cantidad <= $p_Corporativo * 5) {
            $resultado = $t_Corporativo * 5;
            
        }if ($cantidad > $p_Corporativo * 5 && $cantidad <= $p_Corporativo * 6) {
            $resultado = $t_Corporativo * 6;
            
        }if ($cantidad > $p_Corporativo * 6 && $cantidad <= $p_Corporativo * 7) {
            $resultado = $t_Corporativo * 7;
            
        }if ($cantidad > $p_Corporativo * 7 && $cantidad <= $p_Corporativo * 8) {
            $resultado = $t_Corporativo * 8;
            
        }if ($cantidad > $p_Corporativo * 8 && $cantidad <= $p_Corporativo * 9) {
            $resultado = $t_Corporativo * 9;
            
        }if ($cantidad > $p_Corporativo * 9 && $cantidad <= $p_Corporativo * 10) {
            $resultado = $t_Corporativo * 10;
        
        }if ($cantidad > $p_Corporativo * 10 && $cantidad <= $p_Corporativo * 11) {
            $resultado = $t_Corporativo * 11;
        
        }if ($cantidad > $p_Corporativo * 11 && $cantidad <= $p_Corporativo * 12) {
            $resultado = $t_Corporativo * 12;
        
        }if ($cantidad > $p_Corporativo * 12 && $cantidad <= $p_Corporativo * 13) {
            $resultado = $t_Corporativo * 13;
            
        }if ($cantidad > $p_Corporativo * 12 && $cantidad <= $p_Corporativo * 13) {
            $resultado = $t_Corporativo * 13;
        }
        if ($cantidad > $p_Corporativo * 12 && $cantidad <= $p_Corporativo * 14) {
            $resultado = $t_Corporativo * 14;
        }
    }



    //VERIFICACION DE IMAGEN IKEA
    if (isset($_POST['IKEA'])) {
        
        $ikea = $_POST['IKEA'];

        if ($cantidad >= 1 && $cantidad <= $p_ikea) {
            $resultado = $t_ikea;
            
        }if ($cantidad > $p_ikea && $cantidad <= $p_ikea * 2) {
            $resultado = $t_ikea * 2;
            
        }if ($cantidad > $p_ikea * 2 && $cantidad <= $p_ikea * 3) {
            $resultado = $t_ikea * 3;
            
        }if ($cantidad > $p_ikea * 3 && $cantidad <= $p_ikea * 4) {
            $resultado = $t_ikea * 4;
            
        }if ($cantidad > $p_ikea * 4 && $cantidad <= $p_ikea * 5) {
            $resultado = $t_ikea * 5;
            
        }if ($cantidad > $p_ikea * 5 && $cantidad <= $p_ikea * 6) {
            $resultado = $t_ikea * 6;
            
        }if ($cantidad > $p_ikea * 6 && $cantidad <= $p_ikea * 7) {
            $resultado = $t_ikea * 7;
            
        }if ($cantidad > $p_ikea * 7 && $cantidad <= $p_ikea * 8) {
            $resultado = $t_ikea * 8;
            
        }if ($cantidad > $p_ikea * 8 && $cantidad <= $p_ikea * 9) {
            $resultado = $t_ikea * 9;
            
        }if ($cantidad > $p_ikea * 9 && $cantidad <= $p_ikea * 10) {
            $resultado = $t_ikea * 10;
            
        }if ($cantidad > $p_ikea * 10 && $cantidad <= $p_ikea * 11) {
            $resultado = $t_ikea * 11;
            
        }if ($cantidad > $p_ikea * 11 && $cantidad <= $p_ikea * 12) {
            $resultado = $t_ikea * 12;
            
        }if ($cantidad > $p_ikea * 12 && $cantidad <= $p_ikea * 13) {
            $resultado = $t_ikea * 13;
        
       
        }if ($cantidad > $p_ikea * 13 && $cantidad <= $p_ikea * 14) {
            $resultado = $t_ikea * 14;
        }
    }

    
    //VERIFICACION DE IMAGEN CMR
    if (isset($_POST['CMR'])) {


        if ($cantidad >= 1 && $cantidad <= $p_cmr) {
            $resultado = $t_cmr;
            
        }if ($cantidad > $p_cmr && $cantidad <= $p_cmr * 2) {
            $resultado = $t_cmr * 2;
            
        }if ($cantidad > $p_cmr * 2 && $cantidad <= $p_cmr * 3) {
            $resultado = $t_cmr * 3;
            
        } if ($cantidad > $p_cmr * 3 && $cantidad <= $p_cmr * 4) {
            $resultado = $t_cmr * 4;
            
        }if ($cantidad > $p_cmr * 4 && $cantidad <= $p_cmr * 5) {
            $resultado = $t_cmr * 5;
            
        }if ($cantidad > $p_cmr * 5 && $cantidad <= $p_cmr * 6) {
            $resultado = $t_cmr * 6;
            
        }if ($cantidad > $p_cmr * 6 && $cantidad <= $p_cmr * 7) {
            $resultado = $t_cmr * 7;
            
        }if ($cantidad > $p_cmr * 7 && $cantidad <= $p_cmr * 8) {
            $resultado = $t_cmr * 8;
            
        }if ($cantidad > $p_cmr * 8 && $cantidad <= $p_cmr * 9) {
            $resultado = $t_cmr * 9;
            
        }if ($cantidad > $p_cmr * 9 && $cantidad <= $p_cmr * 10) {
            $resultado = $t_cmr * 10;
        
        
        }if ($cantidad > $p_cmr * 10 && $cantidad <= $p_cmr * 11) {
            $resultado = $t_cmr * 11;
        
        
        }if ($cantidad > $p_cmr * 11 && $cantidad <= $p_cmr * 12) {
            $resultado = $t_cmr * 12;
        
        
        }if ($cantidad > $p_cmr * 12 && $cantidad <= $p_cmr * 13) {
            $resultado = $t_cmr * 13;
        
        
        }if ($cantidad > $p_cmr * 13 && $cantidad <= $p_cmr * 14) {
            $resultado = $t_cmr * 14;
        }
    }
    
    //SI LA CANTIDAD SUPERA A LA CAPACIDAD MAXIMA DIARIA
    if($cantidad > $resultado * 14) {
    $exceso = "cantidad solicitada es mayor a la usual favor comunicate con nosotros para atencion personalizada";    
    }
} 
?>
<?php require_once 'includes/header.php'; ?>
