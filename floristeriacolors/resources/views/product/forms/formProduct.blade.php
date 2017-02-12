<div class="form-group">
	{!!Form::label('Nombre')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre'])!!}		
</div>

<div class="form-group">
	{!!Form::label('Descripción')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa la descripción'])!!}		
</div>

<div class="form-group">
	{!!Form::label('Imagen')!!}
	{!!Form::file('imagen')!!}		
</div>

<div class="form-group">
	{!!Form::label('Categoria','Categoria: ')!!}
	{!!Form::select('category_id',$categories)!!}		
</div>