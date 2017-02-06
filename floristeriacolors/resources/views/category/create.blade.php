@extends('layouts.admin')

@section('content')

	{!!Form::open(['route'=> 'categoria.store', 'method'=>'POST'])!!}
		<div class="form-group">
			{!!Form::label('Nombre')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de categoria'])!!}
			
		</div>

		{!!Form::submit('Registrar',['class'=>'btn btn-primary∫'])!!}

	{!!Form::close()!!}


@stop