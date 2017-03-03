@extends('layouts.adminBase')

@section('content')
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NUEVO POST FLORAL</h4>
                                  <p class="category">www.floristeriaColors.com</p>
                            </div>
                            <div class="content">
                                <!-- aqui inicia el formulario de crear nuevo producto -->
                                <form>
                                    <div class="row">                                      
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control" placeholder="Título post" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Escoge una imágen:</label>
                                                <input type="file" class="form-control" name="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descripción:</label>
                                                <textarea rows="5" class="form-control" placeholder="Aqui decribe el producto" value="Mike">
                                                    
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                                    <div class="clearfix"></div>
                                </form>
                                <!-- aqui finaliza el formulario de crear nuevo producto -->
                            </div>
                        </div>
                    </div>

@stop