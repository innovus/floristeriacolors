@extends('layouts.base')


@section('content')

@include('layouts.buscadorArreglos')
<section class="menu-carrito">
    <div class="row">
        <div class="col-md-4 col-md-offset-2 col-sm-12 text-center">
            <h4>Hay <strong id="cantidad">0</strong> productos en tu carrito de compras</h4>
        </div>
       
                <div class="col-md-3 col-sm-12 text-left">
                    <button class="demo btn  btn-lg" data-toggle="modal" href="#responsive">VER CARRITO DE COMPRAS</button>
                </div>
    </div>

</section>

<section class="arreglo-detalles">
    <div class="container">
        <div class="row">
            <div class="col-md-5 img-arreglo-detalles">
                <div class="col-md-12">
                  <img src="/img/arreglos/{{$producto->imagen}}" class="img-responsive">
                  <input type="hidden" id="img" value="{{$producto->imagen}}" name="">
                </div>
                
              
            <!-- -->
            <div class="col-md-12 ">
                <div class="row puntosGanados">
                    <div class="col-md-4 col-sm-6 cuadro text-center">
                        <p><h5>PUNTOS POR COMPRA <strong>1995</strong></h5></p>
                        

                    </div>
                    <div class="col-md-4 col-sm-6 cuadro text-center">
                        <p><h5>GARANTIA 100% ASEGURADA</h5></p>
                        
                    </div>
                    <div class="col-md-4 col-sm-6 text-center">
                        <p><h5>SITIO WEB SEGURO</h5></p>
                    </div>
                    
                </div>
            </div>

            <!-- -->
            <div class="col-md-12">

                    <button class="btn-comprar" onclick="AgregarProducto()">AGREGAR A CARRITO DE COMPRAS</button>
                    
            </div>

            <!-- -->

            </div>


            <div class="col-md-7">
                <h2>{{$producto->nombre}}</h2>
                <input type="hidden" value="{{$producto->nombre}}" id="nombreProducto" name="">
                <p>
                    {{$producto->descripcion}}
                </p>
                @if($producto->prices->isEmpty())
                  <h2><strong>COP 0</strong></h2>
                @else
                <input type="hidden" name="" id="valorProducto" value="{{number_format($producto->prices->first()->precio)}}">
                  <h2><strong>COP {{number_format($producto->prices->first()->precio)}}</strong></h2>
            
                @endif  
                <div class="cantidad-arreglo">
                    <p class="text-cantidad">Cantidad:</p> 
                    <input type="number" step="1" min="0"  id="cantidadProducto" name="quantity" value="1" title="Cantidad" class="input-text qty text" size="4" />
                </div>
                <div class="detalles-arreglo">
                    <h3>Si quieres sorprender en grande.. <strong>Agrega un detalle.!</strong></h3>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">

                    @foreach($categories as $category)
                    <li role="presentation" >
                            <a href="#{{$category->name}}" aria-controls="{{$category->name}}" role="tab" data-toggle="tab">{{$category->name}}</a>
                        </li>

                    @endforeach
                    <!--
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
                        </li>-->
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">

                  @foreach($categories as $category)
                  
                    <div role="tabpanel" class="tab-pane active" id="{{$category->name}}">

                    @foreach($category->products as $product)
                    <!-- un arreglo -->
                            <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms">
                                <div class="detalle-desc">                                   
                                         <img src="/img/arreglos/{{$product->imagen}}" class="img-responsive">
                                         <input type="hidden" value="/img/arreglos/{{$product->imagen}}" id="img{{$product->id}}">
                                         <input type="hidden" id="{{$product->id}}" value="{{$product->prices->first()->precio}}" name="">
                                        <div class="cantidad-detalle">
                                          <p>Cantidad:</p>
                                          <input type="number" step="1" min="0"  id="cantidadDetalle{{$product->id}}" name="quantity" value="1" title="Cantidad" class="input-text qty text" size="4" />
                                        </div>

                                          <input type="hidden" value="{{$product->nombre}}" id="nombreDetalle{{$product->id}}" name="">
                                          <h3><strong>COP {{number_format($product->prices->first()->precio)}}</strong></h3>
                                          <button onclick="agregarDetalle({{$product->id}})" class="btn btn-success form-control">AGREGAR</button>
                                </div>
                            </div>
                            <!-- fin un arreglo -->


                    @endforeach
                        
                            


                    </div>

                 


                  @endforeach
                   </div>


                </div>

                
            </div>
       
            
            
        </div>
        
    </div>
    
</section>
<div id="responsive" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
    <span class="fa fa-close fa-2x"></span>
    </button>
    
  </div>
  <div class="modal-body text-center">
    <div class="row text-center">
            <h3>MI CARRITO DE COMPRAS</h3>
        <!--inicio de formulario donde se cargaran los datos de carrito de compras-->
            <form>
              <div class="col-md-6 col-md-offset-3 " id="canasta" name="canasta">
                  <!-- un detalle-->
                  <div class="row">
                      <div class="col-md-2 col-xs-2 text-center">
                          <div class="cant"><h4 id="cantidadArreglo">0</h4></div>
                      </div>
                      <div class="col-md-4 col-xs-4" id="img-Producto">
                          
                      </div>
                      <div class="col-md-4 " id="COP">
                          
                      </div>
                      <div class="col-md-2" id="btn-quitar">
                          
                      </div>
                      
                  </div>

                  <hr>
                  <!--fin un detalle -->
            </div>
            </form>
          <!-- fin formulario -->
          <div class="col-md-12 text-center">
              <h2>SUBTOTAL:<strong id="subtotalCarrito">0</strong></h2>
          </div>
     </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
            <button type="button" class="btn btn-primary">Confirmar Compra</button>
        </div>
  </div>
 
</div>


@include('layouts.productosRelacionados')

@stop
