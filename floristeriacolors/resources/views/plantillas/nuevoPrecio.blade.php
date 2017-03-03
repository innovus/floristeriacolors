@extends('layouts.adminBase')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">REGISTRAR NUEVO PRECIO</h4>
            <p class="category">www.floristeriaColors.com</p>

        </div>
        <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tamaño</label>
                            <input type="text" class="form-control" placeholder="Nombre del tamaño del producto, ej: Grande, mediano, pequeño, 12 rosas, 6 rosas, etc" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" class="form-control" placeholder="Valor del producto, ej: 50000,70000, etc" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Escoge el producto</label>
                            <select class="form-control">
                                <option>Rosas</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@stop