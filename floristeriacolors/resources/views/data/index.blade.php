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
                                <h4 class="title">EDITAR MI INFORMACIÓN</h4>
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
    <!-- se muestra un resumen de la info registrada o actualizada -->                
    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="/img/logo.jpg" alt="..."/>

                                      <h4 class="title">Floristería Colors<br />
                                         <small>Calle 19 #31 -19 Las Cuadras</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> 7290041 <br>
                                                    3183072264 <br>
                                                    San Juan de Pasto 
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="https://www.facebook.com/Floristeria-Colors-826542960800106/?fref=ts" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>
@stop
