@extends('layouts.base')

@section('content')
     
      
      <!-- seccion 1  -->

        <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container">
                <br><br><br> 
                    <div class="row  col-md-6 col-md-offset-3"><!--formulario inicios de sesion -->
                      <form method="POST"> 
                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2 class="sec">BIENVENIDO</h2>
                            
                            <p class="sec-title ">a la mejor Floristeria de todo Colombia.</p>
                        </div>
                        
                          
                            <div class="col-md-12 ">
                                <div class="input-group">
                                   
                                    <input type="text" class="form-control" name="city" placeholder="Busca tu ciudad">
                                    <span class="input-group-btn">
                                         <button class="btn btn-default" type="button"><span class="fa fa-search fa-1x"></span></button>
                                    </span>
                                </div>                             
                                
                            </div>

                        </form>
                    </div><!-- fin formulario inicio de sesion -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                                                      
                                <p class="sec-title2">No importa en que parte de Colombia estes siempre te ofreceremos un excelente servicio con hermosos diseños y comodos precios.</p>
                                </div>
                    </div>
                    
                </div>
            </div>
        </section>

      <!-- fin seccion 1-->

      <!-- categorias -->
      <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="sec-sub-title text-center wow fadeInRight animated " data-wow-duration="500ms">
                        <p>LOS MAS VENDIDOS </p>
                        <h5>Aquellos que han enamorado a nuestros clientes</h5>
                    </div>

                    <!-- service item -->
                    <div class="col-md-2 col-md-offset-1 wow fadeInLeft" data-wow-duration="500ms">
                        <div class="service-item">
                            <!--<div class="service-icon">
                                
                            </div>-->
                            
                            <div class="service-desc">
                                
                               
                                 <img src="img/rosas.jpg" class="img-responsive">
                                  <h3>Rosas!</h3>
                                  <h3>COP 40.000</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                    
                    <!-- service item -->
                    <div class="col-md-2  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                        <div class="service-item">
                                                    
                            <div class="service-desc">
                               
                                 <img src="img/cesta.jpg" class="img-responsive">
                                  <h3>Romance!</h3>
                                  <h3>COP 50.000</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                    
                    <!-- service item -->
                    <div class="col-md-2 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                        <div class="service-item">
                                                        
                            <div class="service-desc">
                                
                                
                                 <img src="img/flor_violeta.jpg" class="img-responsive">
                                 <h3>Canastas!</h3>
                                 <h3>COP 30.000</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                    <!-- service item -->
                    <div class="col-md-2 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                        <div class="service-item">
                                                        
                            <div class="service-desc">
                                
                                
                                 <img src="img/spanish_roses.jpg" class="img-responsive">
                                 <h3>Canastas!</h3>
                                 <h3>COP 20.000</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                    <!-- service item -->
                    <div class="col-md-2 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                        <div class="service-item">
                                                    
                            <div class="service-desc">
                                
                                
                                <img src="img/canasta2.jpg" class="img-responsive">
                                <h3>Exóticos & Diseño!</h3>
                                <h3>COP 30.000</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end service item -->
                     
                     <!-- boton ver todas categorias -->
                        <div class="col-md-4 col-md-offset-4">
                            <div class="btn-categorias">
                                <a href="">VER TODOS LOS ARREGLOS</a>
                            </div>
                        </div>
                     <!-- fin btn-->   
                    <div class="col-md-12 text-center">
                     <hr><h3>"Con Floristería Colors expresas tus sentimientos."</h3><hr>
                    </div>
                </div>
            </div>
        </section>

      <!-- fin categorias -->

      <!-- tres pasos  -->
            <section id="" class="trespasos">
                <div class="container">
                    <div class="row titulo-pasos" >
                        <div class="col-md-8 col-md-offset-2">
                            <h2>COMPRA TU ARREGLO FLORAL EN 3 SIMPLES PASOS:</h2><br>
                        </div>
                        <div class="col-md-4  trespasos-member text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="fa fa-shopping-basket
             fa-4x"></span>
                                </div>
                                
                            </div>
                            
                            <h5>Elige tu arreglo y si gustas agrega un detalle especial a tu regalo!</h5>
                        </div>
                        <div class="col-md-4  trespasos-member text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="fa fa-calendar fa-4x"></span>
                                </div>
                                
                            </div>
                            
                            <h5>Elige la fecha y horario de entrega. Además puedes escibir tu mensaje. </h5>
                        </div>
                        <div class="col-md-4 trespasos-member text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="fa fa-credit-card  fa-4x"></span>
                                </div>
                                
                            </div>
                            
                            <h5>Efectua el pago. Y lo llevaremos hasta donde tu Destinatario!</h5>
                        </div>
                        <div class="col-md-4 col-md-offset-4 btnn">
                            <a href="" class="form-control ">Fácil, rápido y seguro</a>
                        </div>
                    </div>
                </div>

            </section>


      <!-- fin de tres pasos-->


      <!-- formas de pago -->
        <section id="" class="formasPago">
            <div class="container">
                <div class="row" >

                    <div class="col-md-7">
                        <img src="img/medios.png" class="img-responsive">
                    </div>
                    <div class="col-md-5 newsletter">
                        <h3>NEWSLETTER</h3>
                        <p>
                            Suscribete a nuestro newsletter y recibe importantes descuentos!
                        </p><br>
                        <input type="text" name="" placeholder="Tu correo electrónico">
                        <button class="btnsusc">Suscribirse</button>
                    </div>
                </div>
            </div>

        </section>


      <!--fin formas de pago -->

        <section id="slider" class="sliderO">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- End Indicators bullet -->              
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- single slide -->
                    <div class="item active">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated texto">Es un gusto tener una floreria como la de ustedes para atendernos a las personas que estamos lejos de nuestros seres amados, les doy mil gracias el ramo de rosas llego en el momento y fecha indicado.</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated">Jhon Frey Diaz</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                    <!-- single slide -->
                    <div class="item">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated texto">Es un gusto tener una floreria como la de ustedes para atendernos a las personas que estamos lejos de nuestros seres amados, les doy mil gracias el ramo de rosas llego en el momento y fecha indicado.</h3>
                            <p data-wow-duration="500ms" class="wow slideInRight animated">Jorge Luis Viveros</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                      <!-- single slide -->
                    <div class="item">
                        <div class="carousel-caption">
                            <h5 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">¿QUE OPINAN NUESTROS CLIENTES?<span></span></h5>
                            <h3 data-wow-duration="500ms" class="wow slideInLeft animated texto">Es un gusto tener una floreria como la de ustedes para atendernos a las personas que estamos lejos de nuestros seres amados, les doy mil gracias el ramo de rosas llego en el momento y fecha indicado.</h3>
                            <p data-wow-duration="500ms" class="wow slideInRight animated">Juan Carlos Pantoja</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                    
                      
                </div>
                <!-- End Wrapper for slides -->
                
            </div>
        </section>
    
        <!--puntos por compra -->
        <section id="" class="puntos">
            <div class="container">
                <div class="row" >

                    <div class="col-md-4 puntos-win">
                        <div class="devider1 text-center">
                            <span class="fa fa-star fa-2x"></span>
                            <span class="fa fa-star fa-2x"></span>
                            <span class="fa fa-star fa-2x"></span>
                            <span class="fa fa-star fa-2x"></span>
                            <span class="fa fa-star fa-2x"></span>
                        </div>
                        <div class="win text-center">
                             <p>
                            Con <strong>Floristeria Colors</strong> Ganas Puntos en cada compra que realices y puedes utilizalos <h5>para pagar tus proximos arreglos.!</h5>
                        </p>
                            <a href="" class="ver-info-puntos form-control">Ver mas Información</a>
                        </div>
                       
                    </div>
                    <div class="col-md-4 flores " >
                       <h4 class="text-center">¿COMO CUIDAR TUS FLORES ?</h4>
                       <img src="img/flores.png" class="img-responsive ">
                    </div>

                     <div class="col-md-4 flores2 " >
                       <h4 class="text-center">PLANTA UN ÁRBOL MEMORIAL </h4>
                       <img src="img/arbol.png" class="img-responsive ">
                    </div>
                    
                </div>
            </div>

        </section>


        <!-- fin puntos por compra -->
        
        <!--seccion 2 -->
        <section id="facts2" class="facts2">
                <div class="parallax-overlay">
                    <div class="container">
                    <br><br><br> 
                        <div class="row  col-md-6 col-md-offset-3"><!--formulario inicios de sesion -->
                         
                        </div><!-- fin formulario inicio de sesion -->
                        <div class="col-md-10 col-md-offset-1">
                            <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                                                          
                                    <p class="sec-titler">Expresa tus sentimientos</p>
                                    </div>
                        </div>
                        
                    </div>
                </div>
        </section>

        <!-- fin seccion2 -->
           
       



@stop