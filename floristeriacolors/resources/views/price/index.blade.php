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
		<th>Id</th>
		<th>Producto</th>
		<th>Tamaño</th>
		<th>Precio</th>
		
	</thead>
	@foreach($prices as $price)
	<tbody>
		<td>{{$price->id}}</td>
		<td>{{$price->product->nombre}}</td>
		<td>{{$price->tamaño}}</td>
		<td>{{$price->precio}}</td>

		<td>{!!link_to_route('precios.edit',$title = 'Editar',$parameters = $price->id,$attributes =['class'=>'btn btn-primary'])!!} 
		 {!!Form::open(['route'=>['precios.destroy',$price->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}

	{!!Form::close()!!}

		</td>

		
		
	</tbody>
	@endforeach
</table>
@stop