<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <title>FABRICA CL</title>
        <link rel="stylesheet" type="text/css" href="./assets/estilos.css"/>
        <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="favicon/x-icon" href="./assets/img/logo_fabrica.svg" />
        <link rel="stylesheet" type="text/css" href="./assets/responsives/responsive1.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Merriweather:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>

        <!--CABECERA-->
        <header id="header">
            <div class="logo">
                <h3>FABRICA TECHNOLOGY</h3>
            </div>
            
            <!--MENU DE NAVEGACION-->
            <nav id="nav">
                <ul>                                            
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                    <li>
                        <a href="#proyectos">proyectos</a>
                    </li>
                    <li>
                        <a href="#Tiempos">Tiempos</a>
                    </li> 

                    <li>
                        <a href="#servicios">Servicios</a>
                    </li>
                    <li>
                        <a href="#inicio">Inicio</a>
                    </li>
                </ul>         
            </nav>
        </header>
        <!--slider-->
        <div id="slider" class="carousel slide" data-ride="carousel">
        
            <!--botones del slider-->
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
            </ol>

            <!--fin de botones del slider-->

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="assets/img/FABRICA-INC2.png" alt="fabricaimg" />
                    <div class="carousel-caption">
                        <h5>Servicios Tecnologicos</h5>
                        <p>Tecnologia al alcance de tus manos.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block img-fluid" src="assets/img/santiago.png" alt="fabricaimg"/>
                    <div class="carousel-caption">
                        <h5>Mantente conectado</h5>
                        <p>Gestion de proyectos de telecomunicaciones</p>
                        <a href="#servicios">Conoce nuestros servicios</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block img-fluid" src="assets/img/fondo5.png" alt="fabricaimg"/>
                    <div class="carousel-caption">
                        <h5>Deja todo en nuestras manos</h5>
                        <p>Tecnologia al alcance de tus manos.</p>
                        <a href="#servicios">Conoce nuestros servicios</a>
                    </div>
                </div>


            </div>
            
            <!--fin del slider-->
        </div>
        <div class="clearfix"></div>


        <div class="central">
            <!--TARJETAS-->
            <div class="tarjetas">
                <a name="servicios"></a>
                <h1>NUESTROS SERVICIOS</h1>

                <h3>DESCRUBRE LO QUE FABRICA TECHNOLOGY TIENE PARA TI</h3>

                <div class="card_services">
                    <img src="assets/img/hardware2.png" class="img-fluid"/>
                    <h4>Hardware</h4>
                    <p class="description">
                        Manejo especializado y certificado para nuestros 
                        clientes a nivel de hardware tecnologico<br>
                        <a href="http://localhost/masterphp/Fabrica.cl/servicios/servicios.php">Ver Mas</a>
                    </p>
                </div>

                <div class="card_services">
                    <img src="assets/img/software.png" class="img-fluid"/>
                    <h4>Software</h4>
                    <p class="description">
                        Administracion y uso de los mejores software para tu empresa u organizacion
                        <br>
                        <a href="http://localhost/masterphp/Fabrica.cl/servicios/servicios.php">Ver Mas</a>
                    </p>
                </div>

                <div class="card_services">
                    <img src="assets/img/server.png" class="img-fluid"/>
                    <h4>Comunicaciones</h4>
                    <p class="description">
                        Departamento de ingenieria y redes<br>
                        <a href="http://localhost/masterphp/Fabrica.cl/servicios/servicios.php">Ver Mas</a>
                    </p>
                </div>

                <div class="card_services" >
                    <img src="assets/img/sistemas_operativos.png" class="img-fluid"/>
                    
                    <h4>Imagenes operativas</h4>
                    <p class="description">
                       Creacion de imagenes corporativas y masterizacion de equipos<br>
                        <a href="http://localhost/masterphp/Fabrica.cl/servicios/servicios.php">Ver Mas</a>
                    </p>
                    
                </div>

                <div class="card_services">
                    <img src="assets/img/notebook.png" class="img-fluid"/>
                    <h4>Preparacion</h4>
                    <p class="description">
                        Actualizacion, instalacion de partes para tu equipo computacional
                        <br>
                        <a href="http://localhost/masterphp/Fabrica.cl/servicios/servicios.php">Ver Mas</a>
                    </p>
                </div>

                <div class="card_services">
                    <img src="assets/img/instalacion.png" class="img-fluid"/>
                    <h4>Instalacion</h4>
                    <p class="description">
                        Instalacion en instancias del cliente, sistemas 100% operativos<br>
                        <a href="http://localhost/masterphp/Fabrica.cl/servicios/servicios.php">Ver Mas</a>
                    </p>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>

        <div id="tiempos">
            <a name="Tiempos"></a>
            <div class="externo">
                <h2>!CALCULA TUS TIEMPOS!</h2>
                <h3 class="description_externo">
                    Haz uso de nuestra mas reciente herramienta de calculos de proceso, basada
                    en tecnologia de alta gama para ayudar a nuestros clientes.<br>
                    !valoramos tu tiempo!
                </h3>

            </div>
            <div class="link">
                <h2>
                    <a href="http://localhost/masterphp/Fabrica.cl/Tiempos/tiempos.php">PULSA AQUI PARA CONOCER TUS TIEMPOS</a>
                </h2>
            </div>
        </div>

        <div class="partners">
            <a name="proyectos"></a>
            <div class="partners-description">
                <h3>PROYECTOS CONFIANZA Y CALIDAD</h3>
                <p>
                    Prestacion de servicios por años nos ha caracterizado para ser tu mejor opcion
                    en la busqueda de un partnert tecnologico, calidad y compromiso nos representan.<br>
                    ELLOS CONFIAN, !CONTACTANOS!
                </p>
            </div>
            <div class="img">
                <img src="assets/img/logo-sodimac.png" alt="logo-sodimac"/>
                <img src="assets/img/logo-sonda.svg" alt="logo-sonda"/>
                <img src="assets/img/logo-eiansa.svg" alt="logo-iansa" />
                <img src="assets/img/colgram-logo.png" alt="logo-banco-cmr" />
                <img src="assets/img/Logo-Falabella-Marca_.png" alt="logo-falabella"/>
                <img src="assets/img/logo_bci.svg" alt="logo-bci"/>
            </div>
        </div>

        <div class="container_contact">
            <a name="contacto"></a>
            <h2>CONTACTA CON NOSOTROS</h2>
            <form class="form" method="" action=""> 
                <label for="name"></label>
                <input type="text" name="text" placeholder="Nombre">

                <label for="lastname"></label>
                <input type="text" name="lastname" placeholder="Apellido">

                <label for="email"></label>
                <input type="email" name="email" placeholder="Email">

                <textarea class="textarea" name="textarea"  placeholder="Solicitud"></textarea>


                <input type="submit" name="submit" value="solicitar informacion">
            </form>
        </div>

        <footer id="footer">
            <div class="footer_container">
                <div class="nav_footer">
                    <h4>Customer</h4>
                    <ul>
                        <li>
                            <a href="#inicio">Inicio</a>
                        </li>

                        <li>
                            <a href="#Tiempos">contenido</a>
                        </li>
                        <li>
                            <a href="#contacto">Contacto</a>
                        </li>

                        <li>
                            <a href="#proyectos">Proyectos</a>
                        </li>
                    </ul>
                </div>

                <div class="icon_footer">
                    <p class="icon">f</p>
                    <p class="icon">t</p>
                    <p class="icon">s</p>
                    <p class="icon">r</p>
                </div>

                <div class="description_footer">
                    <p>
                        Haz uso de nuestra mas reciente herramienta de calculos de proceso, basada
                        en tecnologia de alta gama para ayudar a nuestros clientes.<br>
                        !valoramos tu tiempo!
                    </p>
                </div>
            </div> 

        </footer>

        <script type="text/javascript" src="bootstrap/jquery/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
        

        <script>
            $(document).ready(function () {
                $(".carousel").carousel({
                    interval: 2500
                });
            });
        </script>


    </body>
</html>

