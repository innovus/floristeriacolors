@extends('layouts.base')


@section('content')

<section class="bienvenida">
        <div class="container"> 

            <div class="row">
                <div class="col-md-6 text-center">
                   <p>Bienvenido a la Floristeria mas importante de Colombia</p> 
                   <h4>Tu compra segura y 100% garantizada!</h4>
                </div>
                <div class="col-md-6">
                     
                    <div class="input-group">
                                   
                        <input type="text" class="form-control" name="city" placeholder="Buscar arreglo. ej: Arreglo de rosas">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="fa fa-search fa-1x"></span></button>
                        </span>
                    </div>                             
                                
                            
                </div>
               
                
            </div>

            
        </div>
        
    </section>

    <section class="categoriasFlores">
        <div class="container">
            <div class="row ">
                  <div class="col-md-3">
                        <div class="contenedor-menu">
                                <!-- -->
                                <ul id="accordion" class="accordion">
                                    <li>
                                        <div class="link"><a rel="nofollow" rel="noreferrer" href="#">Todos los Arreglos</a></div>
                                    </li>
                                    <li ><!--class="default open" -->
                                        <div class="link">Los más Destacados<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Rosas</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Girasoles</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="link">Categorias<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Arreglos Florales</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Diseños</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Frutas</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Gerberas</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Margaritas</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Rosas</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Girasoles</a></li>
                                        </ul>
                                    </li>
                                    <li><div class="link">Ocasiones<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Amor</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Condolencias</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Dia de la Madre</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Dia de la mujer</a></li>
                                        </ul>
                                    </li>
                                      <li><div class="link">Con descuentos especiales<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Amor</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Condolencias</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Dia de la Madre</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Dia de la mujer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <!-- -->
                        </div>
                      
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

@stop