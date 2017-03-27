@extends('layouts.adminBase')


@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">MULTIMEDIA</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
    </div>
</div>
<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">MI VIDEO EN LA PAGINA AYUDA</h4>
           
        </div>
        <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Link video</label>
                            <input type="text" class="form-control" placeholder="link video" value="">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-fill pull-right">ACTUALIZAR</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
 <div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">Slider #1</h4>
              
        </div>
        <div class="content">
            <!-- aqui inicia el formulario de crear nuevo post -->
            <form>
                <div class="row">                                      
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" placeholder="Nombre producto" value="">
                        </div>
                    </div>
                </div>
                <!-- para poner la imagen -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <input type="file" id="files" class="form-control" name="files[]" />
                            
                      
                        </div>
                                                          
                    </div>
                    <div class="col-md-6">
                      <div class="form-group text-center"  id="list">
                        <img src="/img/arreglos/10Alegria.jpg" style="width: 500px;" class="img-responsive">

                      </div>
                    </div>
                </div>
            <!--fin para poner la imagen, cuando termines borras -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Descripción:</label>
                            <textarea rows="5" class="form-control" placeholder="Aqui decribe el producto" value="Mike">
                                
                            </textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">guardar</button>
                <div class="clearfix"></div>
            </form>
            <!-- aqui finaliza el formulario de crear post -->
        </div>
    </div>
</div>
<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">Slider #2</h4>
              
        </div>
        <div class="content">
            <!-- aqui inicia el formulario de crear nuevo post -->
            <form>
                <div class="row">                                      
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" placeholder="Nombre producto" value="">
                        </div>
                    </div>
                </div>
                <!-- para poner la imagen -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <input type="file" id="files" class="form-control" name="files[]" />
                            
                      
                        </div>
                                                          
                    </div>
                    <div class="col-md-6">
                      <div class="form-group text-center"  id="list">
                        <img src="/img/arreglos/10Alegria.jpg" style="width: 500px;" class="img-responsive">

                      </div>
                    </div>
                </div>
            <!--fin para poner la imagen, cuando termines borras -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Descripción:</label>
                            <textarea rows="5" class="form-control" placeholder="Aqui decribe el producto" value="Mike">
                                
                            </textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">guardar</button>
                <div class="clearfix"></div>
            </form>
            <!-- aqui finaliza el formulario de crear post -->
        </div>
    </div>
</div>
<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">Slider #3</h4>
              
        </div>
        <div class="content">
            <!-- aqui inicia el formulario de crear nuevo post -->
            <form>
                <div class="row">                                      
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" placeholder="Nombre producto" value="">
                        </div>
                    </div>
                </div>
                <!-- para poner la imagen -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <input type="file" id="files" class="form-control" name="files[]" />
                            
                      
                        </div>
                                                          
                    </div>
                    <div class="col-md-6">
                      <div class="form-group text-center"  id="list">
                        <img src="/img/arreglos/10Alegria.jpg" style="width: 500px;" class="img-responsive">

                      </div>
                    </div>
                </div>
            <!--fin para poner la imagen, cuando termines borras -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Descripción:</label>
                            <textarea rows="5" class="form-control" placeholder="Aqui decribe el producto" value="Mike">
                                
                            </textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">guardar</button>
                <div class="clearfix"></div>
            </form>
            <!-- aqui finaliza el formulario de crear post -->
        </div>
    </div>
</div>
@stop