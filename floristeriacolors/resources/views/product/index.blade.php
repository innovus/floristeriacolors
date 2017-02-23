@extends('layouts.admin')


@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}</div>

@endif

@section('content')
<table class="table">

	<thead>
		<th>Nombre</th>
		<th>Categoria</th>
		<th>Descripcion</th>
		<th>Imagen</th>
		
		
	</thead>
	@foreach($products as $product)
	<tbody>
		<td>{{$product->nombre}}</td>
		<td>{{$product->category->name}}</td>
		<td>{{$product->descripcion}}</td>
		<td>{{$product->imagen}}</td>

		<td>{!!link_to_route('productos.edit',$title = 'Editar',$parameters = $product->id,$attributes =['class'=>'btn btn-primary'])!!} 
		 {!!Form::open(['route'=>['productos.destroy',$product->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}

	{!!Form::close()!!}

		</td>

		
		
	</tbody>
	@endforeach
</table>
@stop