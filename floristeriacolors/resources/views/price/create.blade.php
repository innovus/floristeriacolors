@extends('layouts.admin')

@section('content')
	@include('alerts.request')
	
	{!!Form::open(['route'=> 'precios.store', 'method'=>'POST'])!!}
		@include('price.forms.formPrice')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary∫'])!!}

	{!!Form::close()!!}


@stop