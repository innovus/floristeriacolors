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
	<table class="table" id="tprices">
		<thead>
			<tr>
				<th>Tamaño</th>
				<th>Precio</th>
			</tr>
		
		</thead>
		<tbody>
		@for ($i = 0; $i < 3; $i++)
			<tr>
				<th>{!!Form::text('tamaño'.$i,null,['class'=>'form-control','placeholder'=>'Ingresa el tamaño'])!!}</th>
				<th>{!!Form::text('precio'.$i,null,['class'=>'form-control','placeholder'=>'Ingresa en Precio'])!!}</th>
			
			</tr>
		@endfor
		
	
		</tbody>		
	</table>
		{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
		<hr>

</div>