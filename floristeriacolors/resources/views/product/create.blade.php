@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	
	{!!Form::open(['route'=> 'producto.store', 'method'=>'POST','files' => true])!!}
		@include('product.forms.formProduct')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary∫'])!!}

	{!!Form::close()!!}


@stop