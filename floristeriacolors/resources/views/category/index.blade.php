@extends('layouts.admin')
<?php $message = Session::get('message') ?>
@if ($message == 'store') 
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  Caterogira creado exitosamente</div>

@endif

@section('content')
<table class="table">
	<thead>
		<th>Id</th>
		<th>Categoria</th>
		
	</thead>
	@foreach($categories as $category)

	<tbody>
		<td>{{$category->id}}</td>
		<td>{{$category->name}}</td>
		
		
	</tbody>
	@endforeach
</table>
@stop