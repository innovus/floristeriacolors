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
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Tamaño</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Carrito</th>
                    <th></th>
                   
                </thead>
                <tbody>
                <!--inicio un movimiento-->
                    <tr>
                        <td>1</td>
                        <td>Rosas</td>
                        <td>Grande</td>
                        <td>1</td>
                        <td>35000</td>
                        <td>C1</td>
                        <td><a class="btn btn-success">ver</a></td>
                    </tr>
                   
                <!-- finr un movimiento -->

                <!--inicio un cliente-->
                    <tr>
                        <td>1</td>
                        <td>Rosas</td>
                        <td>Grande</td>
                        <td>1</td>
                        <td>35000</td>
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
            <h4 class="title">CARRITO DE COMPRAS</h4>
        </div>
        <div class="content table-responsive table-full-width">
    <!-- espacio para colocar la informacion del carrito de compras seleccionado-->
                

    <!-- fin espacio -->

        </div>
    </div>
</div>
<!-- -->


@stop