<!-- categorias -->
      <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="sec-sub-title text-center wow fadeInRight animated " data-wow-duration="500ms">
                        <p>LOS MAS VENDIDOS </p>
                        <h5>Aquellos que han enamorado a nuestros clientes</h5>
                    </div>
                    <!-- un arreglo -->
                     @foreach($masVendidos as $producto)
                     <div class="col-md-2 wow fadeInLeft" data-wow-duration="500ms">      
                        <div class="service-desc">
                           <img src="/img/arreglos/{{$producto->imagen}}" class="img-responsive">
                              <h3>{{$producto->nombre}}</h3>

                              @if($producto->prices->isEmpty())
                                <h3>$40,000</h3>
                              @else
                                <h3>${{number_format($producto->prices->first()->precio)}}</h3>
                              @endif  
 
                              
                            <div class="ver-boton">
                              <a href="/arregloSeleccionado/{{$producto->id}}" class=" btn-ver form-control">VER</a>
                            </div>  
                        </div>
                        
                    </div>
                      @endforeach

                  <!-- fin un arreglo -->
                    

                     
                     <!-- boton ver todas categorias                        <div class="col-md-4 col-md-offset-4">
                            <div class="btn-categorias">
                                <a href="">VER TODOS LOS ARREGLOS</a>
                            </div>
                        </div>
                      fin btn-->   
                    <div class="col-md-12 text-center">
                     <hr><h3>"Con Floristería Colors expresas tus sentimientos."</h3><hr>
                    </div>
                </div>
            </div>
        </section>

      <!-- fin categorias -->