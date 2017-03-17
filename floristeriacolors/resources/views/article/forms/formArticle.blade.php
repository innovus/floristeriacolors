<!-- aqui inicia el formulario de crear nuevo post -->
    <div class="row">                                      
        <div class="col-md-12">
            <div class="form-group">
            	{!!Form::label('Titulo:')!!}
            	{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>' Titulo '])!!}
            </div>
        </div>
    </div>
    <div class="row">    
        <div class="col-md-12">
            <div class="form-group">
               {!!Form::label('Escoge una imagen')!!}
				{!!Form::file('imagen',['class'=>'form-control'])!!}
            </div>
                                            
        </div>
    </div>
                                    
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            {!!Form::label('Descripción')!!}
			{!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'5'])!!}	
            </div>
        </div>
    </div>
