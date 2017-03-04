@extends('layouts.adminBase')
@section('content')
@include('alerts.request')

	<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">REGISTRAR NUEVO PRECIO</h4>
            <p class="category">www.floristeriaColors.com</p>

        </div>
        <div class="content">
        	{!!Form::open(['route'=> 'precios.store', 'method'=>'POST'])!!}
        		@include('price.forms.formPrice')
                {!!Form::submit('Registrar',['class'=>'btn btn-info btn-fill pull-right'])!!}
                <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@stop