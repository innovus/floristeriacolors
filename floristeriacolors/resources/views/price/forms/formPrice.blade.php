<div class="form-group">
	{!!Form::label('Tamaño')!!}
	{!!Form::text('tamaño',null,['class'=>'form-control','placeholder'=>'Ingresa el tamaño'])!!}
</div>
<div class="form-group">
	{!!Form::label('Precio')!!}
	{!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ingresa el precio'])!!}
</div>

<div class="form-group">
	{!!Form::label('Precio','Precio: ')!!}
	{!!Form::select('product_id',$products)!!}		
</div>