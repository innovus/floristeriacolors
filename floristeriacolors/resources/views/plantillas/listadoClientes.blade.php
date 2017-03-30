@extends('layouts.adminBase')


@section('content')
<div class="col-md-7">
    <div class="card">
        <div class="header">
            <h4 class="title">LISTADO CLIENTES</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                   
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                <tr>
                       
                        <td>{{$cliente->nombres}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->fecha_nacimiento}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->celular}}</td>
                </tr>

                @endforeach

                
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="card">
        <div class="header">
            <h4 class="title">PROXIMO CUMPLEAÑOS</h4>
            
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Teléfono</th>
                   
                </thead>
                <tbody>
                <!--inicio un cliente-->
                    <tr>
                        <td>Jhon Frey</td>
                        <td>10/10/1989</td>
                        <td>3173187766</td>
                    </tr>
                <!-- finr un cliente -->
                <!--inicio un cliente-->
                    <tr>
                       
                        <td>Juan Carlos</td>
                        <td>10/10/1989</td>
                        <td>3173187766</td>
                    </tr>
                <!-- finr un cliente -->
                
                </tbody>
            </table>

        </div>
    </div>
</div>

@stop