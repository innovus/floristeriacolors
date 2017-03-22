@extends('layouts.adminBase')

@section('content')

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


<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">REGISTRAR CATEGORIA</h4>
            <p class="category">www.floristeriaColors.com</p>

        </div>
        <div class="content">
        	{!!Form::open(['route'=> 'categorias.store', 'method'=>'POST'])!!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        	{!!Form::label('Nombre categoria')!!}
							{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la categoria'])!!}
                        </div>
                    </div>
                </div>

                <div class="row">                                      
                	<div class="col-md-12">
            			<div class="form-group">
            			{!!Form::label('Tipo','Tipo de Categoria: ')!!}
						{!!Form::select('category_type_id',$category_types,null,['class'=>'form-control'])!!}	
            			</div>
        			</div>
				</div>
                {!!Form::submit('Registrar',['class'=>'btn btn-info btn-fill pull-right'])!!}
                <div class="clearfix"></div>
			{!!Form::close()!!}
        </div>
    </div>
</div>


<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS CATEGORIAS REGISTRADAS</h4>
                    </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                    
                </thead>
                @foreach($categories as $category)

				<tbody>
					<td>{{$category->name}}</td>
					<td>{{$category->category_type->name}}</td>
					<td>
					<a href="/admin/categorias/{{$category->id}}/edit" class="btn btn-success"><span class="fa fa-pencil fa-1x"></span></a>

					{!!Form::open(['route'=>['categorias.destroy',$category->id],'method'=>'DELETE'])!!}
						
						<button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
					{!!Form::close()!!}

					</td>

		
		
				</tbody>
				@endforeach

            </table>

        </div>
    </div>
</div>
@stop