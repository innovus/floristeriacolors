@extends('layouts.base')


@section('content')

<section class="contacto">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center titulo-contacto">
                <h3>CONTÁCTANOS</h3>
            </div>

        <!-- ****************************************** --> 
            <div class="col-md-8 col-md-offset-2 landmarkit">
                <h3>Punto de Referencia</h3>
                <div class="col-md-4">
                    <h5>Floristeria Colors</h5>
                    <h5>{{$data->direccion}}</h5>
                    <h5>{{$data->ciudad}}</h5>
                    
                </div>
                 <div class="col-md-4">
                    <h5><span class="fa  fa-whatsapp fa-1x"></span> {{$data->celular}}</h5>
                    <h5><span class="fa  fa-phone fa-1x"></span>{{$data->telefono}}</h5>
                    <h5><span class="fa  fa-envelope fa-1x"></span> {{$data->email}}</h5>
                </div>
                 <div class="col-md-4 text-center">
                    <span class="fa fa-map-marker fa-5x"></span>
                </div>
            </div>
        <!-- ****************************************** --> 





            <div class="col-md-8 col-md-offset-2 date1" >                

              <!-- ****************************************** --> 
               <div class="col-md-6 dates">
                <form action="#" id="contact-form" name="contact-form">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Nombres:">
                    
                        <input type="email" name="email" id="email" placeholder="Correo electrónico:">
                        <input type="text" name="" class="" placeholder="Teléfono:">
                        <input type="text" name="" class="" placeholder="Ciudad:">
                                          
                        <textarea  name="message" id="message" placeholder="Mensaje:"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="" class="btn-contact" id="form-submit"  value="Enviar Mensaje">
                    </div>
                    </form>
                </div>
                <div class="col-md-6 date2" >

                    <div id="map_canvas">
                        
                    </div>
                    
                </div>
                 <!-- --> 
            </div>
         
        </div>   
    </div> 
</section>

@stop
