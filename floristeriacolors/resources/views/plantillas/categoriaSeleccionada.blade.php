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

                  <!-- arreglos de la respectiva categoria seleccionada -->
                  <div class="col-md-9">
                    <div class="imagen-categoria">
                        <img src="/img/Agradecimiento.jpg" class="img-responsive">                        
                    </div>
                    <div class="row ordenar-arreglos">
                        <div class="col-md-7">
                            <h5><strong>Floristeria Colors</strong>/{{$categoria->name}}</h5>
                        </div>
                        <div class="col-md-5">
                            <h5><strong>Ordenar por: </strong><a href="">Todos</a>|<a href="">Menos precio</a>|<a href="">Mayor precio</a></h5>
                        </div>
                        
                    </div>
                    <!--listado de arreglos de la categoria seleccionada -->

                            <!-- un arreglo -->

                            @foreach($categoria->products as $product)
                             <!-- un arreglo -->
                              <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">      
                                  <div class="service-desc">
                                    <img src="/img/arreglos/{{$product->imagen}}" class="img-responsive">
                                          <h3>{{$product->nombre}}</h3>
                                          <h3>COP 40.000</h3>

                                      <div class="ver-boton">
                                         <a href="/arregloSeleccionado/{{$product->id}}" class="btn-ver form-control">VER</a>
                                      </div>  
                                  </div>
                                  
                              </div>
                            <!-- fin un arreglo -->

                             @endforeach
                           
                            <!-- fin un arreglo -->
                           
                    <!--fin listado de arreglos de la categoria seleccionada  -->
                                         
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
                <div class="col-md-12">
                  <!-- un arreglo -->
                    <div class="col-md-2 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/mi corazon.jpg" class="img-responsive">
                              <h3>Rosas!</h3>
                              <h3>COP 40.000</h3>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/2" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                    <!-- un arreglo -->
                    <div class="col-md-2 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/27MI-DETALLE.jpg" class="img-responsive">
                              <h3>Rosas!</h3>
                              <h3>COP 40.000</h3>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/1" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                      <!-- un arreglo -->
                    <div class="col-md-2 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/AMANECER2.jpg" class="img-responsive">
                              <h3>Rosas!</h3>
                              <h3>COP 40.000</h3>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/3" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                      <!-- un arreglo -->
                    <div class="col-md-2 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/48jarron importado.jpg" class="img-responsive">
                              <h3>Rosas!</h3>
                              <h3>COP 40.000</h3>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/1" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                      <!-- un arreglo -->
                    <div class="col-md-2 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/cajarosas.jpg" class="img-responsive">
                              <h3>Rosas!</h3>
                              <h3>COP 40.000</h3>
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/2" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                  <!-- fin un arreglo -->
                      <!-- un arreglo -->
                    <div class="col-md-2 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/58jarron.jpg" class="img-responsive">
                              <h3>Rosas!</h3>
                              <h3>COP 40.000</h3>
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