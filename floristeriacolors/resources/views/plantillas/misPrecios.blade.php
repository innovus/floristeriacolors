@extends('layouts.adminBase')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS PRECIOS REGISTRADOS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <!--inicio un precio-->
                    <tr>
                        <td>1</td>
                        <td>Rosas</td>
                        <td>Grande</td>
                        <td>70000</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un precio -->
                <!--inicio un precio-->
                    <tr>
                        <td>2</td>
                        <td>Rosas</td>
                        <td>Mediano</td>
                        <td>50000</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un precio -->
                <!--inicio un precio-->
                    <tr>
                        <td>3</td>
                        <td>Rosas</td>
                        <td>Pequeño</td>
                        <td>35000</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un precio -->  
                </tbody>
            </table>

        </div>
    </div>
</div>


@stop