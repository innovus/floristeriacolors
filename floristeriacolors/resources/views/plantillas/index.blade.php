@extends('layouts.base')

@section('content')
     
      
      <!-- seccion 1  -->

        <section id="facts" class="facts">
            <div class="parallax-overlay">
                <div class="container">
                <br>
                    <div class=" col-md-6 col-ms-6 col-md-offset-3">
                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                            <h2 class="sec">BIENVENIDO</h2>
                            
                            <p class="sec-title ">a la mejor Floristeria de todo Colombia.</p><br><br><br>
                            <a href="/realizarArreglo" class="btn-entrada">REALIZA Y COMPRA TU ARREGLO FLORAL</a>
                        </div>  
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                                                      
                                <p class="sec-title2">No importa en que parte de Colombia estes siempre te ofreceremos un excelente servicio con hermosos diseños y comodos precios.</p>
                                </div>
                    </div>
                    
                </div>
            </div>
        </section>

      <!-- fin seccion 1-->

      @include('layouts.categorias')

      @include('layouts.trespasos')

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
    
       
        
           
       



@stop