<div class="row text-center">
                    <h3>MI INFORMACIÓN</h3>
                    <div class="col-md-6 col-md-offset-3 date-user">
                    <!-- datos-->
                        {!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Nombres'])!!}
                        {!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos'])!!}
                        <div class="col-md-6 seccion-datos ">
                           <div class="form-group date-user jf-date">
                        {!!Form::text('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Fecha de Nacimiento'])!!}
                               
                           </div>
                        </div>
                       
                        {!!Form::text('celular',null,['class'=>'form-control','placeholder'=>'Celular'])!!}
                        {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion'])!!}
                        {!!Form::hidden('user_id',$user->id)!!}

                    <!--fin datos-->
                    </div>
                    <div class="col-sm-12">
                        <div class="radio">
                          <label>
                           {!!Form::radio('sexo','F')!!}
                            <!--<input type="radio" name="sexo" value="F">-->
                            <span class="cr"><i class="cr-icon fa fa-check fa-2x"></i></span>
                            Femenino
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                          {!!Form::radio('sexo','M')!!}
                            <!--<input type="radio" name="sexo" value="M" checked>-->
                            <span class="cr"><i class="cr-icon fa fa-check fa-2x"></i></span>
                            Masculino
                          </label>
                        </div>
                
                    </div>

                 
            </div>