@extends('layouts.adminBase')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">EDITAR MI INFORMACIÓN</h4>
        </div>
        <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Empresa</label>
                            <input type="text" class="form-control" disabled placeholder="Company" value="www.floristeríaColors.com">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Username" value="Floristeria Flowers">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo Electrónico</label>
                            <input type="email" class="form-control" placeholder="Email" value="floristeriaColor@gmail.com">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" class="form-control" placeholder="Ciudad" value="San Juan de Pasto, Nariño">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" placeholder="Dirección" value="Calle 19 #31 -19 Las Cuadras">
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" placeholder="Teléfono" value="7290041">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Celular</label>
                            <input type="text" class="form-control" placeholder="Celular" value="3183072264">
                        </div>
                    </div>
                    
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar Información</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@stop
