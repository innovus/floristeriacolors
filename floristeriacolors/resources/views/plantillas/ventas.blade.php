@extends('layouts.adminBase')


@section('content')
<div class="col-md-10 col-md-offset-1">
    <div class="card">
        <div class="header">
            <h4 class="title">LISTADO VENTAS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    
                    <th>Fecha venta</th>
                    <th>ID Carrito</th>
                    <th>Cliente</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th>Acción</th>
                   
                </thead>
                <tbody>
                <!--inicio un movimiento-->
                @foreach($carts as $cart) 
                    <tr>
                        <td>{{$cart->fecha_compra}}</td>
                        <td>{{$cart->id}}</td>
                        <td>{{$cart->client->nombres}} {{$cart->client->apellidos}}</td>
                        <td>{{number_format($cart->total_carrito())}}</td>
                        <td>
                        @if($cart->client->was_payed)
                            Cancelado
                        @else
                         No Cancelado

                        @endif

                        </td>
                        <td>
                        
                            <a href="#info" data-type="zoomin" id="btn-ver1" onclick="verbtn(1)" class="btn btn-danger">ver</a>
                            
                        </td>
                    </tr>
                @endforeach
                   
                <!-- finr un movimiento -->   

                <!--inicio un movimiento-->
                    <tr>
                        <td>10/04/2017</td>
                        <td>14</td>
                        <td>Ana Maria lopez</td>
                        <td>23000</td>
                        <td>Sin atender</td>
                        <td><a href="#info3" data-type="zoomin" id="btn-ver2" onclick="verbtn(2)" class="btn btn-success">ver</a></td>
                    </tr>
                   
                <!-- finr un movimiento -->               

                
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- un carrito-->
<div class="overlay-container" id="o1">
        <div class="window-container zoomin card" id="w1">
            <span class="fa fa-times-circle-o fa-2x" id="close1"></span><br>
        <div class="pp">
            <div class="header text-center">
                    <h4 class="title">CARRITO DE COMPRAS # 1 </h4>
                </div>  
            <hr>
            <!-- ****************************************************** -->
            <div class="col-md-8 col-md-offset-2 text-left">
                  <!-- un producto -->
                    <div class="row">
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Imagen</th>
                                    <th>Categoria</th>
                                    <th>Nombre</th>
                                    <th>Valor</th>
                                   
                                </thead>
                                <tbody>
                                <!--inicio un movimiento-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/10arreglo final 1.jpg">
                                        </td>
                                        <td>Rosas</td>
                                        <td>Caja de Rosas</td>
                                        <td>23000</td>
                                    </tr>
                                   
                                <!-- finr un movimiento --> 
                                
                                <!--inicio un movimiento-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/10arreglo final 1.jpg">
                                        </td>
                                        <td>Rosas</td>
                                        <td>Caja de Rosas</td>
                                        <td>23000</td>
                                    </tr>
                                   
                                <!-- finr un movimiento -->  
                                       
                                
                                </tbody>
                            </table>

                        </div>
                        <!--DETALLES DEL COMPRADOR -->
                        <hr>
                        <div class="row">
                        <div class="col-md-12"><label>DATOS COMPRADOR</label></div>
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>NOMBRES Y APELLIDOS:</label>
                                </div>
                                <div class="col-md-6">
                                    JHON FREY DIAZ D
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>CÉDULA:</label>
                                </div>
                                <div class="col-md-6">
                                    1122783249
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>TELÉFONO:</label>
                                </div>
                                <div class="col-md-6">
                                    3173187766
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                        </div>
                        <!--FIN DETALLES DEL COMPRADOR -->
                        <!--DETALLES DEL DESTINATARIO -->
                        <hr>
                        <div class="row">
                        <div class="col-md-12"><label>DATOS DESTINATARIO</label></div>
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>NOMBRE Y APELLIDOS:</label>
                                </div>
                                <div class="col-md-6">
                                    ESTEFANIA SANTACRUZ 
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>DIRECCIÓN:</label>
                                </div>
                                <div class="col-md-6">
                                    LAS CUADRAS
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>TELÉFONO:</label>
                                </div>
                                <div class="col-md-6">
                                    3173187766
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>FECHA DE ENTREGA:</label>
                                </div>
                                <div class="col-md-6">
                                    10/4/2017
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>MENSAJE TARJETA:</label>
                                </div>
                                <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, cupiditate sequi velit. Obcaecati excepturi quibusdam deleniti commodi eveniet in hic sed tenetur nemo laudantium labore omnis amet, dolorum, impedit, eos!
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>OBSERVACIÓN:</label>
                                </div>
                                <div class="col-md-8">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt corporis, illo vitae, quasi reiciendis aspernatur sed cum officia eius, eum accusantium similique. Non molestias et asperiores libero, consectetur necessitatibus.
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                        </div>
                        <!--FIN DETALLES DEL DESTINATARIO -->
                        <div class="col-md-9 col-md-offset-2 text-center">
                            <h4><strong>TOTAL:1540000</strong></h4>
                        </div>
                        <div class="col-md-9 col-md-offset-2 text-center">
                            <a href=""  class="btn btn-danger">CONFIRMAR COMPRA</a>
                        </div>
                    </div> 
                <!-- fin un producto --> 
            </div>     
            <!--******************************************************* -->
        </div>
                
            
        </div>
        
</div>
<!-- fin un carrito  -->
<!-- un carrito-->
<div class="overlay-container" id="o2">
        <div class="window-container zoomin card" id="w2">
            <span class="fa fa-times-circle-o fa-2x" id="close2"></span><br>
        <div class="pp">
            <div class="header text-center">
                    <h4 class="title">CARRITO DE COMPRAS # 13</h4>
                </div>  
            <hr>
            <!-- ****************************************************** -->
            <div class="col-md-8 col-md-offset-2 text-left">
                  <!-- un producto -->
                    <div class="row">
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Imagen</th>
                                    <th>Categoria</th>
                                    <th>Nombre</th>
                                    <th>Valor</th>
                                   
                                </thead>
                                <tbody>
                                <!--inicio un movimiento-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/10arreglo final 1.jpg">
                                        </td>
                                        <td>Rosas</td>
                                        <td>Caja de Rosas</td>
                                        <td>23000</td>
                                    </tr>
                                   
                                <!-- finr un movimiento --> 
                                <!--inicio un movimiento-->
                                    <tr>
                                        
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/10arreglo final 1.jpg">
                                        </td>
                                        <td>Rosas</td>
                                        <td>Caja de Rosas</td>
                                        <td>23000</td>
                                    </tr>
                                   
                                <!-- finr un movimiento -->
                                <!--inicio un movimiento-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/10arreglo final 1.jpg">
                                        </td>
                                        <td>Rosas</td>
                                        <td>Caja de Rosas</td>
                                        <td>23000</td>
                                    </tr>
                                   
                                <!-- finr un movimiento --> 
                                <!--inicio un movimiento-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/10arreglo final 1.jpg">
                                        </td>
                                        <td>Rosas</td>
                                        <td>Caja de Rosas</td>
                                        <td>23000</td>
                                    </tr>
                                   
                                <!-- finr un movimiento --> 
                                <!--inicio un movimiento-->
                                    <tr>
                                        <td>
                                            <img class="img-responsive" style="width: 50px;" src="/img/arreglos/10arreglo final 1.jpg">
                                        </td>
                                        <td>Rosas</td>
                                        <td>Caja de Rosas</td>
                                        <td>23000</td>
                                    </tr>
                                   
                                <!-- finr un movimiento -->  
                                       
                                
                                </tbody>
                            </table>

                        </div>
                        <!--DETALLES DEL COMPRADOR -->
                        <hr>
                        <div class="row">
                        <div class="col-md-12"><label>DATOS COMPRADOR</label></div>
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>NOMBRES Y APELLIDOS:</label>
                                </div>
                                <div class="col-md-6">
                                    JHON FREY DIAZ D
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>CÉDULA:</label>
                                </div>
                                <div class="col-md-6">
                                    1122783249
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>TELÉFONO:</label>
                                </div>
                                <div class="col-md-6">
                                    3173187766
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                        </div>
                        <!--FIN DETALLES DEL COMPRADOR -->
                        <!--DETALLES DEL DESTINATARIO -->
                        <hr>
                        <div class="row">
                        <div class="col-md-12"><label>DATOS DESTINATARIO</label></div>
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>NOMBRE Y APELLIDOS:</label>
                                </div>
                                <div class="col-md-6">
                                    ESTEFANIA SANTACRUZ 
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>DIRECCIÓN:</label>
                                </div>
                                <div class="col-md-6">
                                    LAS CUADRAS
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>TELÉFONO:</label>
                                </div>
                                <div class="col-md-6">
                                    3173187766
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label>FECHA DE ENTREGA:</label>
                                </div>
                                <div class="col-md-6">
                                    10/4/2017
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>MENSAJE TARJETA:</label>
                                </div>
                                <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, cupiditate sequi velit. Obcaecati excepturi quibusdam deleniti commodi eveniet in hic sed tenetur nemo laudantium labore omnis amet, dolorum, impedit, eos!
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                            <!-- UN DATO-->
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>OBSERVACIÓN:</label>
                                </div>
                                <div class="col-md-8">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt corporis, illo vitae, quasi reiciendis aspernatur sed cum officia eius, eum accusantium similique. Non molestias et asperiores libero, consectetur necessitatibus.
                                </div>
                            </div>
                            <!--FIN UN DATO -->
                        </div>
                        <!--FIN DETALLES DEL DESTINATARIO -->
                        <div class="col-md-9 col-md-offset-2 text-center">
                            <h4><strong>TOTAL:1540000</strong></h4>
                        </div>
                        <div class="col-md-9 col-md-offset-2 text-center">
                            <a href="" class="btn btn-danger">CONFIRMAR COMPRA</a>
                        </div>
                    </div> 
                <!-- fin un producto --> 
            </div>     
            <!--******************************************************* -->
        </div>
                
            
        </div>
        
</div>
<!-- fin un carrito  -->

<!-- ******************************************************************* -->
<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
    <script type="text/javascript" src="/assets/js/demo.js"></script>
@stop