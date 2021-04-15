<!DOCTYPE HMTL>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>app fabrica</title>
        <link rel="stylesheet" type="text/css" href="./assets/styles_tiempos.css"/>
    </head>
    
    <body>
        <!--HEADER-->
        <header id="header">
             <nav id="nav">
                    <ul>                                            
                        <li>
                            <a href="http://localhost/masterphp/Fabrica.cl/">Inicio</a>
                        </li>
                    </ul>         
                </nav>
        </header>

        <!--formulario-->
        <div class="formulario">
            <!--formulario que se muestra en usuario-->
            <form method="POST" action="">
                <label for="cantidad">INGRESE CANTIDAD DE EQUIPOS QUE DESEA PROCESAR:</label><br>
                <input type="number" name="cantidad" placeholder="cantidad"><br><br>

                <label>A CONTINUACION SELECCIONE IMAGEN QUE DESEA VERIFICAR: </label><br>
                <input type="submit" name="Corporativo" value="Corporativo">
                <input type="submit" name="IKEA" value="IKEA">
                <input type="submit" name="CMR" value="CMR">
            </form>
            <div class="clearfix"></div>
        </div>
        <br>
        
        <?php
        //CALCULO DE RESULTADO    
        if ($resultado != false):
            $resultado_exitoso =  "TIEMPO APROXIMADO: " . $resultado . " MINUTOS; ";
            if ($resultado / 60 > 1) {
                $resultado_exitoso = "TIEMPO APROXIMADO: " .round($resultado / 60, 1) . " HORAS.";
            } elseif ($resultado / 60 == 1) {
                $resultado_exitoso = "TIEMPO APROXIMADO: " .($resultado / 60) . " HORA";
            }
        endif;
        ?>
         
        <!-- RESULTADO EXITOSO MENOR A 110 EQUIPOS -->
        <?php if(isset($resultado_exitoso)): ?>
               <div class="exito">
                   <?php echo $resultado_exitoso; ?>
               </div>
        <?php endif; ?>
        
        <!-- RESULTADO ERROR MAYOR A 110 EQUIPOS -->
         <?php if(isset($exceso)): ?>
            <div class="error">
                <?php echo $exceso; ?>
            </div>
        <?php endif; ?>
           
      
      <!--PIE DE PAGINA-->
        <footer id="footer">
            <p>
                FABRICA INC&COPY;
            </p>
        </footer>
    </body> 
    
</html>