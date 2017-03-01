@extends('layouts.admin')



@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif
@if(Session::has('error'))

<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('error')}}</div>

@endif

@section('content')
<table class="table">
	<thead>
		<th>Id</th>
		<th>Categoria</th>
		<th>Acciones</th>
		
	</thead>
	@foreach($categories as $category)

	<tbody>
		<td>{{$category->id}}</td>
		<td>{{$category->name}}</td>
		<td>{!!link_to_route('categorias.edit',$title = 'Editar',$parameters = $category->id,$attributes =['class'=>'btn btn-primary'])!!}  {!!Form::open(['route'=>['categorias.destroy',$category->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}

	{!!Form::close()!!}

		</td>

		
		
	</tbody>
	@endforeach
</table>
@stop