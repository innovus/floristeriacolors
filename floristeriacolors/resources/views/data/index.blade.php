@extends('layouts.adminBase')

@section('content')

    <div class="col-md-8">
    @if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif

                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                            </div>
                            <div class="content">
                                {!!Form::model($data,['route'=>['datos.update',$data->id],'method'=>'PUT'])!!}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Empresa</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="www.floristeríaColors.com">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" placeholder="Username" value="Floristeria Flowers">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo Electrónico</label>
                                                <input name="email" type="email" class="form-control" placeholder="Email" value="{{$data->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <input name="ciudad" type="text" class="form-control" placeholder="Ciudad" value="{{$data->ciudad}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input name="dirección" type="text" class="form-control" placeholder="Dirección" value="{{$data->direccion}}">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Teléfono</label>
                                                <input name="telefono" type="text" class="form-control" placeholder="Teléfono" value="{{$data->telefono}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Celular</label>
                                                <input name="celular" type="text" class="form-control" placeholder="Celular" value="{{$data->celular}}">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar Información</button>
                                    <div class="clearfix"></div>
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
@stop
