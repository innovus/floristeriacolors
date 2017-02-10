@extends('layouts.base')


@section('content')

@include('layouts.buscadorArreglos')

    <section class="categoriasFlores">
        <div class="container">
            <div class="row ">
                  <div class="col-md-3">
                       <!--menu categorias -->
                       @include('layouts.menuCategorias')
                       <!--fin menu categorias -->
                      
                  </div>

                  <!--slider -->
                  <div class="col-md-9">
                    <div class="sli-container">
                        <ul id="sli" class="sli-wrapper">
                            <li class="currento">
                                <img src="img/parallax/rosas.jpg" class="img-responsive" alt="Slider Imagen 1">
                                <div class="caption">
                                    <h3 class="caption-title">Amor y Amistad</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ratione, commodi, hic quas harum aliquam quos nostrum culpa totam quidem rerum!</p>
                                    
                                </div>
                            </li>
                             <li>
                                <img src="img/slider/banneri03_02.jpg" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3 class="caption-title">Dia de la madre</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ratione, commodi, hic quas harum aliquam quos nostrum culpa totam quidem rerum!</p>
                                    
                                </div>
                            </li> 
                             <li>
                                <img src="img/slider/sanvalentin2016.jpg" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3 class="caption-title">Dia de la mujer</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ratione, commodi, hic quas harum aliquam quos nostrum culpa totam quidem rerum!</p>
                                    
                                </div>
                            </li>                             
                        </ul>
                        <ul class="sli-controls" id="sli-controls">
                            
                        </ul>
                        
                    </div>
                      
                  </div>

                  <!-- -->


                 
            </div>
            
        </div>
        
    </section>

    <section class="div-descuento">
        <div class="row">
             <div class="col-md-12 text-center"> 
                        <h2>
                            Regala amor con nuestras Flores este 8 de Marzo, Día de la Mujer.
                        </h2>
                        <h3>
                            Aprovecha ahora y Obtén un 5% de descuento
                        </h3>
                        <p>
                            Ingresa el cupón MUJER al terminar la compra.
                        </p>
                      
                  </div>
            
        </div>
    </section>
@include('layouts.categorias')
     <section class="div-ofertas">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"> 
                        <h2>
                            Siempre mantenemos ofertas del mes!
                        </h2>
                        <h3>
                            Aprovecha ofertas hasta de un <strong>40% OFF</strong>..!
                        </h3>
                        <input type="submit" name="" value="VER ARREGLOS">
                      
                </div>
            
        </div>
            
        </div>
        
    </section>
@stop