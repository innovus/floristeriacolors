@extends('layouts.adminBase')

@section('content')
	@include('alerts.request')
	
	{!!Form::open(['route'=> 'categoria.store', 'method'=>'POST'])!!}
		@include('category.forms.formCategory')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary∫'])!!}

	{!!Form::close()!!}


@stop