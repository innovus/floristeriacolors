@extends('layouts.adminBase')

@section('content')
	@include('alerts.request')
	
	<div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NUEVO PRODUCTO</h4>
                                  <p class="category">www.floristeriaColors.com</p>
                            </div>
                            <div class="content">

                            {!!Form::model($product,['route'=>['productos.update',$product->id],'method'=>'PUT'])!!}

                              <div class="row">                                      
                                <div class="col-md-12">
                                  <div class="form-group">
                                    {!!Form::label('Nombre producto:')!!}
                                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre producto'])!!}
                                 </div>
                                </div>
                                </div>
                                <div class="row">                                      
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          {!!Form::label('Categoria','Categoria: ')!!}
                                    {!!Form::select('category_id',$categories,null,['class'=>'form-control'])!!}  
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                      {!!Form::label('Descripción')!!}
                                      {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'5'])!!}  
                                      </div>
                                  </div>
                               </div>
                               <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
                                <div class="clearfix"></div>
                              {!!Form::close()!!}
                              </div>
                            </div>
@stop