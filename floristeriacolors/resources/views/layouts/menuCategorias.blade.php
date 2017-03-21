<div class="contenedor-menu">
                                <!-- -->
                                <ul id="accordion" class="accordion">
                                    <li>
                                        <div class="link"><a rel="nofollow" rel="noreferrer" href="#">Todos los Arreglos</a></div>
                                    </li>
                                    <li ><!--class="default open" -->
                                        <div class="link">Los más Destacados<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Rosas</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Girasoles</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="link">Categorias<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                        @foreach($categories as $category)
                                        
                                        <li><a rel="nofollow" rel="noreferrer" href="/arreglos/categorias/{{$category->id}}">{{$category->name}}</a></li>

                                        
                                        @endforeach

                                        </ul>
                                    </li>
                                    <li><div class="link">Ocasiones<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                         @foreach($ocasiones as $ocasion)
                                         <li><a rel="nofollow" rel="noreferrer" href="/arreglos/ocasiones/{{$ocasion->id}}">{{$ocasion->ocasion}}</a></li>

                                         @endforeach

                                        </ul>
                                    </li>
                                      <li><div class="link">Con descuentos especiales<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Amor</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Condolencias</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Dia de la Madre</a></li>
                                            <li><a rel="nofollow" rel="noreferrer" href="#">Dia de la mujer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <!-- -->
                        </div>                       