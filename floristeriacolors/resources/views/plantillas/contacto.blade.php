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
                    <h5>Floristeria Flowers</h5>
                    <h5>Calle 19 #31 -19 Las Cuadras</h5>
                    <h5>San Juan de Pasto</h5>
                    
                </div>
                 <div class="col-md-4">
                    <h5><span class="fa  fa-whatsapp fa-1x"></span> (+57) 3183072264</h5>
                    <h5><span class="fa  fa-phone fa-1x"></span> 7290041</h5>
                    <h5><span class="fa  fa-envelope fa-1x"></span> floristeriaColor@gmail.com</h5>
                </div>
                 <div class="col-md-4 text-center">
                    <span class="fa fa-map-marker fa-5x"></span>
                </div>
            </div>
        <!-- ****************************************** --> 





            <div class="col-md-8 col-md-offset-2 date1" >                

              <!-- ****************************************** --> 
               <div class="col-md-6 date">
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
