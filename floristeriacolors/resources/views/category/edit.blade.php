@extends('layouts.admin')

@section('content')

	{!!Form::model($category,['route'=>['categorias.update',$category->id],'method'=>'PUT'])!!}
		@include('category.forms.formCategory')

		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}


@stop