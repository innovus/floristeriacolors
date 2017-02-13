@extends('layouts.base')


@section('content')

@include('layouts.buscadorArreglos')
<section class="menu-carrito">
    <div class="row">
        <div class="col-md-6 col-md-offset-2 col-sm-12 text-center">
            <h4>Hay <strong>4</strong> productos en tu carrito de compras por <strong>$127.000</strong></h4>
        </div>
        <div class="col-md-3 col-sm-12 text-left">
            <button>VER DETALLES</button>
        </div>
    </div>
</section>

<section class="arreglo-detalles">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="/img/arreglos/{{$producto->imagen}}" class="img-responsive">
            </div>

            <div class="col-md-7">
                <h2>{{$producto->nombre}}</h2>
                <p>
                    {{$producto->descripcion}}
                </p>
                <h2><strong>COP 90,000</strong></h2>
                <div class="cantidad-arreglo">
                    <p class="text-cantidad">Cantidad:</p> 
                    <input type="number" step="1" min="0"  name="quantity" value="1" title="Cantidad" class="input-text qty text" size="4" />
                </div>
                <div class="detalles-arreglo">
                    <h3>Si quieres sorprender en grande.. <strong>Agrega un detalle.!</strong></h3>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Globos</a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Osos</a>
                        </li>
                        <li role="presentation">
                            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Chocolates</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Vinos</a>
                        </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <!-- un arreglo -->
                            <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">
                                <div class="detalle-desc">                                   
                                         <img src="/img/arreglos/29131.bmp" class="img-responsive">
                                          <h3>Rosas!</h3>
                                          <h3>COP 40.000</h3>
                                          <button class="btn btn-success form-control">Solicitar</button>
                                </div>
                            </div>
                            <!-- fin un arreglo -->
                            <!-- un arreglo -->
                            <div class="col-md-3 .col-sm-6 wow fadeInLeft" data-wow-duration="500ms">                                                           
                                    <div class="detalle-desc">                           
                                         <img src="/img/arreglos/get-well11.jpg" class="img-responsive">
                                          <h3>Rosas!</h3>
                                          <h3>COP 40.000</h3>
                                          <button class="btn btn-success form-control">Solicitar</button>
                                </div>
                            </div>
                            <!-- fin un arreglo -->
                            <!-- un arreglo -->
                            <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">                                                       
                                    <div class="detalle-desc">
                                                                               
                                         <img src="/img/arreglos/its-a-girl.jpg" class="img-responsive">
                                          <h3>Rosas!</h3>
                                          <h3>COP 40.000</h3>
                                          <button class="btn btn-success form-control">Solicitar</button>
                                </div>
                            </div>
                            <!-- fin un arreglo -->
                            <!-- un arreglo -->
                            <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">
                                                                                       
                                    <div class="detalle-desc">                           
                                         <img src="/img/arreglos/its-a-boy.jpg" class="img-responsive">
                                          <h3>Rosas!</h3>
                                          <h3>COP 40.000</h3>
                                          <button class="btn btn-success form-control">Seleccionar</button>
                                    </div>
                                
                            </div>
                            <!-- fin un arreglo -->


                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">...</div>
                    <div role="tabpanel" class="tab-pane" id="messages">ssss</div>
                    <div role="tabpanel" class="tab-pane" id="settings">tttt</div>
                  </div>

                </div>

                
            </div>
            <div class="col-md-5 ">
                <div class="row puntosGanados">
                    <div class="col-md-4 col-sm-6 cuadro text-center">
                        <p><h4>PUNTOS POR COMPRA</h4></p>
                        <H4>1995</H4>

                    </div>
                    <div class="col-md-4 col-sm-6 cuadro text-center">
                        <p><h4>GARANTIA 100% ASEGURADA</h4></p>
                        
                    </div>
                    <div class="col-md-4 col-sm-6 text-center">
                        <p><h4>SITIO WEB SEGURO</h4></p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 col-md-offset-2">

                    <button class="btn-comprar">COMPRAR AHORA</button>
                    
            </div>
            
        </div>
        
    </div>
    
</section>

@stop
