@extends('layouts.adminBase')


@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="header">
            <h4 class="title">LISTADO VENTAS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    
                    <th>Producto</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Carrito</th>
                    <th></th>
                   
                </thead>
                <tbody>
                <!--inicio un movimiento-->
                    <tr>
                        
                        <td>Rosas</td>
                        <td>Grande</td>
                        <td>135000</td>
                        <td>2</td>
                        <td>C1</td>
                        <td><a class="btn btn-success">ver</a></td>
                    </tr>
                   
                <!-- finr un movimiento -->

                <!--inicio un cliente-->
                    <tr>
                   
                        <td>Rosas</td>
                        <td>Grande</td>
                        <td>135000</td>
                        <td>2</td>
                        <td>C1</td>
                        <td><a class="btn btn-danger">ver</a></td>
                    </tr>
                   
                <!-- finr un cliente -->
                
                
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- este es el espacio donde ira el carrito de compras seleccionado -->
<!-- en la anterior tabla van a estar todos los movimientos realizados-->
<!-- por los clientes, los que esten con boton ver de color verde seran los que no se han atendido y tendran la opcion de cambiar de estado, y los que esten de boton color rojo seran lo atendidos y no tendran la opcion de cambiar de estado -->

<!-- cuando se seleccione cualquier movimiento se mostrara con detalles en el carrito de compras en la parte derecha -->
<div class="col-md-6">
    <div class="card">
        <div class="header">
            <h4 class="title">CARRITO DE COMPRAS # 12</h4>
        </div>
        <div class="content ">
    <!-- espacio para colocar la informacion del carrito de compras seleccionado-->
            <div class="row">
                <div class="col-md-12">
                <!-- un producto -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <img src="/img/arreglos/10arreglo final 1.jpg" class="img-responsive">
                            </div> 
                        </div>
                        <div class="col-md-8">
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                <label>Canasta de rosas</label>
                            </div>
                        <!-- fin un dato-->
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Tamaño:</strong>
                                <label>15 rosas</label>
                            </div>
                        <!-- fin un dato-->
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Cantidad:</strong>
                                <label>1</label>
                            </div>
                        <!-- fin un dato-->
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Precio Unt:</strong>
                                <label>45000</label>
                            </div>
                        <!-- fin un dato-->
                        </div>
                        
                    </div> 
                <!-- fin un producto --> 
                    <hr>
                 <!-- un producto -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <img src="/img/arreglos/10arreglo final 1.jpg" class="img-responsive">
                            </div> 
                        </div>
                        <div class="col-md-8">
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                <label>Canasta de rosas</label>
                            </div>
                        <!-- fin un dato-->
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Tamaño:</strong>
                                <label>15 rosas</label>
                            </div>
                        <!-- fin un dato-->
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Cantidad:</strong>
                                <label>1</label>
                            </div>
                        <!-- fin un dato-->
                        <!-- un dato-->
                            <div class="form-group">
                                <strong>Precio Unt:</strong>
                                <label>45000</label>
                            </div>
                        <!-- fin un dato-->
                        </div>
                        
                    </div> 
                    <hr>
                <!-- fin un producto --> 
                <!--btn total -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <a href="" class="btn btn-success form-control">
                                    TOTAL: $<strong id="valor">90000</strong>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                <!--fin btn total -->
                </div>
                
            </div>
            <!--DETALLES DEL COMPRADOR -->
            <hr>
            <div class="row">
            <div class="col-md-12"><label>DATOS COMPRADOR</label></div>
                <!-- UN DATO-->
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>NOMBRES Y APELLIDOS:</label>
                    </div>
                    <div class="col-md-8">
                        JHON FREY DIAZ D
                    </div>
                </div>
                <!--FIN UN DATO -->
                <!-- UN DATO-->
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>CÉDULA:</label>
                    </div>
                    <div class="col-md-8">
                        1122783249
                    </div>
                </div>
                <!--FIN UN DATO -->
                <!-- UN DATO-->
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>TELÉFONO:</label>
                    </div>
                    <div class="col-md-8">
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
                    <div class="col-md-4">
                        <label>NOMBRE Y APELLIDOS:</label>
                    </div>
                    <div class="col-md-8">
                        ESTEFANIA SANTACRUZ 
                    </div>
                </div>
                <!--FIN UN DATO -->
                <!-- UN DATO-->
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>DIRECCIÓN:</label>
                    </div>
                    <div class="col-md-8">
                        LAS CUADRAS
                    </div>
                </div>
                <!--FIN UN DATO -->
                <!-- UN DATO-->
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>TELÉFONO:</label>
                    </div>
                    <div class="col-md-8">
                        3173187766
                    </div>
                </div>
                <!--FIN UN DATO -->
                <!-- UN DATO-->
                <div class="col-md-12">
                    <div class="col-md-4">
                        <label>FECHA DE ENTREGA:</label>
                    </div>
                    <div class="col-md-8">
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
            <hr>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <a href="" class="btn btn-danger form-control">Confirmar Compra</a>
                    </div>
                </div>
            </div>    
    <!-- fin espacio -->

        </div>
    </div>
</div>
<!-- -->


@stop