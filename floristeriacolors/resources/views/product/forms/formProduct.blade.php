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

<div>
	<table class="table">
		<thead>
			<tr>
				<th>Tamaño</th>
				<th>Precio</th>
			</tr>
		
		</thead>
		<tbody>
			<th>{!!Form::text('tamaño',null,['class'=>'form-control','placeholder'=>'Ingresa el tamaño'])!!}</th>
			<th>{!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ingresa en Precio'])!!}</th>	
		</tbody>		
	</table>
		{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
		<hr>

</div>