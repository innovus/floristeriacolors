@extends('layouts.adminBase')


@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS PRODUCTOS REGISTRADOS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <!--inicio un producto -->
                    <tr>
                        <td>Caja de 12 rosas</td>
                        <td>Rosas</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates repudiandae debitis, eligendi veritatis maxime quod, aspernatur modi architecto, quia.</td>
                        <td>rosas.jpg</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un producto -->
                    <!--inicio un producto -->
                    <tr>
                        <td>Caja de 12 rosas</td>
                        <td>Rosas</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates repudiandae debitis, eligendi veritatis maxime quod.</td>
                        <td>rosas.jpg</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un producto -->
                <!--inicio un producto -->
                    <tr>
                        <td>Caja de 12 rosas</td>
                        <td>Rosas</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates repudiandae debitis, eligendi veritatis maxime quod, aspernatur modi architecto, quia.</td>
                        <td>rosas.jpg</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un producto --> 
                </tbody>
            </table>

        </div>
    </div>
</div>

@stop