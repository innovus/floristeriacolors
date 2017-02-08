<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Floristería Colors</title>        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- head_css-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script src="https://use.fontawesome.com/b5998af619.js"></script>
        <!-- CSS
        ================================================== -->
        <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href='css/bootstrap.min.css'>
        <!-- jquery.fancybox  -->
        <link rel="stylesheet" href='css/jquery.fancybox.css'>
        <!-- animate -->
        <link rel="stylesheet" href='css/carousel.css'>
        <link rel="stylesheet" href='css/animate.css'>
         <link rel="stylesheet" href='css/style.css'>
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href='css/main.css'>
        <!-- media-queries -->
        <link rel="stylesheet" href='css/media-queries.css'>
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
        <!-- Modernizer Script for old Browsers -->
        <script src='js/modernizr-2.6.2.min.js'></script>

        <!--fin head_css -->

    </head>
    
    <body id="body">
        <!-- header-->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <a class="navbar-brand" href="#">
                        <h1 id="logo">
                            <img src='img/logo.jpg' alt="Brandi" class="img-responsive logo">
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul  class="nav navbar-nav">
                                               
                        <li class="current"><a href="#">Conócenos</a></li>
                        
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#">Contáctanos</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tu cuenta</a>
                          <ul class="dropdown-menu">
                            <li><a href="#"></span> Cambiar contraseña</a></li>
                            <li><a href="#">Terminos legales</a></li>
                            <li><a href="#"> Precios Publicidad</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"></span>¿Buscas trabajo?. Publica tu CV</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"></span> ¿Necesitas ayuda ?</a></li>
                          </ul>
                        </li>
                       
                      
                        
                    </ul>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>

        <!--fin header -->

        <!--separador -->
        <div class="separador">
    
        </div>
        <!--fin separador -->
        @yield('content')

        
       
    
         <!--aqui va footer -->
            <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                        <div class="footer-single">
                            <h6>Contáctanos</h6>
                            <ul>
                                <li><a href="#">Chat Online..! Click AQUÍ.</a></li>
                                <li>Nuestro email:<a href="#">Floristeriacolors@gmail.com</a></li>
                                <li>
                                    <a href="#" class="fb" > <span class="fa fa-facebook-official fa-3x"></span> </a>
                                    <a href="#" class="insta" > <span class="fa fa-instagram fa-3x"></span> </a>
                                    <a href="#" class="tw" > <span class="fa fa-twitter-square fa-3x"></span> </a>
                                    <a href="#" class="youtube"> <span class="fa fa-youtube-square fa-3x"></span> </a>

                                </li>
                                
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="footer-single">
                            <h6>Conócenos </h6>
                            <!--<form action="#" class="subscribe">
                                <input type="text" name="subscribe" id="subscribe" placeholder="Tu Correo electrónico">
                                <input type="submit" value="&#8594;" id="subs">
                            </form>-->
                             <ul>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Garantías</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Programa de afiliados</a></li>
                                <li><a href="#">Políticas de Privacidad y Devolución</a></li>
                                <li><a href="#">Recomendar</a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="footer-single">
                            <h6>Tu cuenta</h6>
                            <ul>
                                <li><a href="#">Mis datos</a></li>
                                <li><a href="#">Mis pedidos</a></li>
                                <li><a href="#">Puntos ganados</a></li>
                                <li><a href="#">Información de Pago</a></li>
                                <li><a href="#">Recordatorios automáticos</a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="footer-single">
                            <h6>Ayuda</h6>
                            <ul>
                                <li><a href="#">¿Como Comprar?</a></li>
                                <li><a href="#">¿Cuáles son las formas de pago?</a></li>
                                <li><a href="#">¿Es segura la compra?</a></li>
                                <li><a href="#">¿Como cuidar las flores?</a></li>
                                <li><a href="#">Preguntas Frecuentes</a></li>
                                <li><a href="#">Entregas en el mismo día</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
         <!--fin footer -->


        <!--script necesario para la app web -->
        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- jquery.isotope -->
        <script src="js/jquery.isotope.js"></script>
        <!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- Contact form validation -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        
        <script>
            var wow = new WOW ({
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       120,          // distance to the element when triggering the animation (default is 0)
                mobile:       false,       // trigger animations on mobile devices (default is true)
                live:         true        // act on asynchronously loaded content (default is true)
              }
            );
            wow.init();
        </script> 
        <!-- Custom Functions -->
        <script src='js/custom.js'></script>
        
        <script type="text/javascript">
            $(function(){
                /* ========================================================================= */
                /*  Contact Form
                /* ========================================================================= */
                
                $('#contact-form').validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        message: {
                            required: true
                        }
                    },
                    messages: {
                        name: {
                            required: "come on, you have a name don't you?",
                            minlength: "your name must consist of at least 2 characters"
                        },
                        email: {
                            required: "no email, no message"
                        },
                        message: {
                            required: "um...yea, you have to write something to send this form.",
                            minlength: "thats all? really?"
                        }
                    },
                    submitHandler: function(form) {
                        $(form).ajaxSubmit({
                            type:"POST",
                            data: $(form).serialize(),
                            url:"process.php",
                            success: function() {
                                $('#contact-form :input').attr('disabled', 'disabled');
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $(this).find(':input').attr('disabled', 'disabled');
                                    $(this).find('label').css('cursor','default');
                                    $('#success').fadeIn();
                                });
                            },
                            error: function() {
                                $('#contact-form').fadeTo( "slow", 0.15, function() {
                                    $('#error').fadeIn();
                                });
                            }
                        });
                    }
                });
            });
        </script>
        <!--fin de script -->
    </body>


