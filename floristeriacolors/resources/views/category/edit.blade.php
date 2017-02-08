@extends('layouts.admin')

@section('content')

	{!!Form::model($category,['route'=>['categoria.update',$category->id],'method'=>'PUT'])!!}
		@include('category.forms.formCategory')

		{!!Form::submit('Actualizar',['class'=>'btn btn-primary∫'])!!}

	{!!Form::close()!!}


@stop