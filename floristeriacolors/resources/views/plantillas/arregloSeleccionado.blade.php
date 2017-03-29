@extends('layouts.base')


@section('content')

@include('layouts.buscadorArreglos')

<section class="menu-carrito">
    <div class="row">
        <div class="col-md-4 col-md-offset-2 col-sm-12 text-center">
            
            <h4>Hay <strong id="cantidad">0</strong> productos en tu carrito de compras</h4>
        </div>
       
                <div class="col-md-3 col-sm-12 text-left">
               
                {!!Form::button('VER CARRITO DE COMPRAS',['class'=>'demo btn  btn-lg', 'data-toggle'=>'modal','id'=>'LookCar', 'href'=>'#responsive','onclick'=>'verCarrito()'])!!}
                   <button class="demo btn  btn-lg" data-toggle="modal" id="LookCar" href="#responsive" onclick="verCarrito()">VER CARRITO DE COMPRAS</button>
                  

                   
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
                <input type="hidden" value="{{$producto->nombre}}" id="nombreProducto">
                <input type="hidden" id="cc" value="{{$producto->id}}">
                <p>
                    {{$producto->descripcion}}
                </p>
                @if($producto->prices->isEmpty())
                  <h2><strong>COP 0</strong></h2>
                @else
                <input type="hidden" name="" id="valorProducto" value="{{number_format($producto->prices->first()->precio)}}">
                  <h2 >$ <strong id="precioT"> {{number_format($producto->prices->first()->precio)}}</strong></h2>
            
                @endif  
                <div class="cantidad-arreglo">
                    <p class="text-cantidad">Cantidad:</p> 
                    <input type="number" step="1" min="0"  id="cantidadProducto" name="quantity" value="1" title="Cantidad" class="input-text qty text" size="4" />
                </div>
                 <div class="cantidad-arreglo">
                    <p class="text-cantidad">Tamaño:</p> 
                    {!!Form::select('selectTamaño',$producto->prices->pluck('tamaño','id'),null,['class'=>'tamaño-arreglo','id'=>'selectTamaño', 'onchange'=> 'changeFunc();'])!!} 
                    <!--

                    <select class="tamaño-arreglo"  id="selectTamaño" onchange="changeFunc();">
                        <option  value="120000">Grande</option>
                        <option  value="150000">mediano</option>
                        <option  value="170000">pequeño</option>
                    </select>
                    -->
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
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">

                  @foreach($categories as $category)
                  
                    <div role="tabpanel" class="tab-pane active" id="{{$category->name}}">

                    @foreach($category->products as $product)
                    <!-- un arreglo -->
                            <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                                <div class="detalle-desc">                                   
                                         <img src="/img/arreglos/{{$product->imagen}}" class="img-responsive">
                                         <input type="hidden" value="{{$product->imagen}}" id="img{{$product->id}}">
                                         <input type="hidden" value="sinTamaño" id="tamDeta">
                                         <input type="hidden" id="{{$product->id}}" value="{{$product->prices->first()->precio}}" name="">
                                        <div class="cantidad-detalle">
                                          <p>Cantidad:</p>
                                          <input type="number" step="1" min="0"  id="cantidadDetalle{{$product->id}}" name="quantity" value="1" title="Cantidad" class="input-text qty text" size="4" />
                                        </div>

                                          <input type="hidden" value="{{$product->nombre}}" id="nombreDetalle{{$product->id}}" name="">
                                          <h3><strong> {{number_format($product->prices->first()->precio)}}</strong></h3>
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
       <div class="add-circulo" id="addcirculo">
                <h2> + AGRUEGADO A CARRITO DE COMPRAS</h2>
            
            
        </div>
        
    </div>
    
</section>



@include('layouts.productosRelacionados')

@stop
