@extends('layouts.base')

@section('content')

<section class="resumenCarrito">
    <div class="container"><br><br><br><br><br>
        <div class="row">
            <!--Datos comprador y destinatario -->
            <div class="col-md-7">
                <div class="col-md-12">
                   
                    <!--info comprador -->
                    <div class="info-final col-md-6 col-sx-12">
                        <div class="col-md-12 info-final-titulo text-center">
                            <h4><strong>DATOS QUIEN RECIBE</strong></h4>
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Nombre:</strong>Estefania Santacruz</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Dirección:</strong>Calle 21 # 24-64</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Teléfono:</strong>3173187767</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Fecha:</strong>28/03/2017</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Mensaje:</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat nisi optio asperiores, sit tempora porro earum natus, aut dignissimos! Cupiditate recusandae maiores necessitatibus libero quia, facere doloremque reprehenderit aliquid ad?</h5>  
                        </div>  
                    </div>
                    <!--fin info comprador -->

                    <!--info destinatario -->
                    <div class="info-final col-md-5 col-sx-12">
                        <div class="col-md-12 info-final-titulo text-center">
                            <h4><strong>DATOS QUIEN ENVÍA</strong></h4>
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Nombre:</strong>Jhon Frey Diaz</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Correo:</strong>sr_jhonf@hotmail.com</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Teléfono:</strong>3173187767</h5>  
                        </div>
                        <div class="col-md-12">
                          <h5> <strong>Cédula:</strong>1122783249</h5>  
                        </div>   
                    </div>
                    <!--fin info destinatario -->

                    <!-- cupon de descuento -->
                    <div class="col-md-12 info-final"><br>
                         <div class="col-md-12">
                             <h5>Tienes un código de descuento? ingresalo aquí</h5>
                         </div>
                         <div class="col-md-12">
                         <input type="text" name="" class="form-control" placeholder="Código Cupón">
                         </div>
                         <div class="col-md-12">
                          <input type="button" class="btn btn-success" value="Aplicar Cupón" name="">
                         </div><br> <br> <br> <br> <br> 
                    </div>
                    <!-- fin cupon de descuento-->
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="radio">
                        <h4>Tienes <strong>5500 puntos</strong> ¿Deseas utilizarlos? </h4>
                    <label>
                        <input type="radio" name="o1" value="" checked>
                        <span class="cr"><i class="cr-icon fa fa-check fa-2x"></i></span>
                        Si
                    </label>
                    <label>
                        <input type="radio" name="o1" value="" >
                        <span class="cr"><i class="cr-icon fa fa-check fa-2x"></i></span>
                        No
                    </label>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                     <h4> Aceptamos pagos con tarjeta de crédito o debito </h4>
                </div>
                <div class="col-md-10 col-md-offset-1 text-center">
                   
                    <img src="\img\pasgos.png" class="img-responsive">
                </div>      
                             
                <div class=" col-md-12">
                    <input type="submit" name="" class="btn btn-primary form-control" value="PAGAR AHORA">
                </div>               
            </div>
            <!--*********************************************-->

            <!--carrito de compras -->
            <div class="col-md-5 resumenCarrito-detalles">
                <div class="col-md-12 text-center">
                    <h3><strong>CARRITO DE COMPRAS</strong></h3><br>
                </div>
                <div class="col-md-12">
                <!-- un detalle-->
                    <div class="row">
                        <div class="col-md-2 col-xs-2 text-center">
                            <div class="cant"><h4>5</h4></div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <img src="/img/cesta.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-4 ">
                            <strong>Cesta Rosas</strong>
                            <h4>COP:27.000</h4>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger">Quitar</button>
                        </div>
                        
                    </div>
                    <hr>
                    <!--fin un detalle -->
                </div>
                <div class="col-md-12 text-center">
                    <h3><strong>SUBTOTAL:</strong> 170.000</h3><br>
                </div>
            </div>
            <!--fin carrito de compras -->
        </div>
        
    </div>
</section>
@stop