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
                                <img src="/img/parallax/rosas.jpg" class="img-responsive" alt="Slider Imagen 1">
                                <div class="caption">
                                    <h3 class="caption-title">Amor y Amistad</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ratione, commodi, hic quas harum aliquam quos nostrum culpa totam quidem rerum!</p>
                                    
                                </div>
                            </li>
                             <li>
                                <img src="/img/slider/banneri03_02.jpg" class="img-responsive" alt="">
                                <div class="caption">
                                    <h3 class="caption-title">Dia de la madre</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ratione, commodi, hic quas harum aliquam quos nostrum culpa totam quidem rerum!</p>
                                    
                                </div>
                            </li> 
                             <li>
                                <img src="/img/slider/sanvalentin2016.jpg" class="img-responsive" alt="">
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
            <div class="row">
               <!-- arreglos de la respectiva categoria seleccionada -->
                  <div class="col-md-12">
                   
                     <div class="col-md-12">
                          <div class="row ordenar-arreglos">
                            <div class="col-md-7">
                                <h5><strong>Floristeria Colors</strong>/{{$nombre}}</h5>
                            </div>
                            <div class="col-md-5">
                                <h5><strong>Ordenar por: </strong><a href="">Todos</a>|<a href="">Menos precio</a>|<a href="">Mayor precio</a></h5>
                            </div>
                            
                          </div>
                     </div>
                    <div class=" row col-md-12">
                       <!--listado de arreglos de la categoria seleccionada -->

                            <!-- un arreglo -->

                            @foreach($products as $product)
                             <!-- un arreglo -->
                              <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                                  <div class="service-desc text-center">
                                    <img src="/img/arreglos/{{$product->imagen}}" class="img-responsive">
                                          <h3><strong>{{$product->nombre}}</strong> </h3>

                                          @if($product->prices->isEmpty())
                                          <h3>SIN PRECIO</h3>

                                          @else
                                            <h3>${{number_format($product->prices->first()->precio)}}</h3>
                                          @endif  
                                         

                                      <div class="ver-boton">
                                         <a href="/arregloSeleccionado/{{$product->id}}" class="btn-ver form-control">VER</a>
                                      </div>  
                                  </div>
                                  
                              </div>
                            <!-- fin un arreglo -->

                             @endforeach
                           
                           
                    <!--fin listado de arreglos de la categoria seleccionada  -->
                    </div>
                                         
                  </div>

                  <!-- fin arreglos de la respectiva categoria seleccionada -->
            </div>
            
        </div>
        
    </section>
    <section class="div-descuento">
        <div class="row">
             <div class="col-md-12 text-center"> 
                        <h2>
                            Otros clientes también estan Buscando Arreglos Florales.
                        </h2>
                        <p>
                            Aprovecha ahora y separa tu regálo.!
                        </p>
                      
            </div>
            
        </div>
        
    </section>
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <!-- un arreglo -->
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/mi corazon.jpg" class="img-responsive">
                              <h3><strong>Rosas!</strong></h3>
                              <h4>$40.000</h4>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/2" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                    <!-- un arreglo -->
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/27MI-DETALLE.jpg" class="img-responsive">
                              <h3><strong>Rosas!</strong></h3>
                              <h4>$40.000</h4>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/1" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                      <!-- un arreglo -->
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/AMANECER2.jpg" class="img-responsive">
                              <h3><strong>Rosas!</strong></h3>
                              <h4>$40.000</h4>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/3" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                  <!-- un arreglo -->
                    <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/AMANECER2.jpg" class="img-responsive">
                              <h3><strong>Rosas!</strong></h3>
                              <h4>$40.000</h4>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/3" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                                         
                </div>
            </div>
        </div>
    </div>

@stop