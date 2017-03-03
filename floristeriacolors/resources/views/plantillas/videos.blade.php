@extends('layouts.adminBase')


@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS VIDEOS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>URL</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <!--inicio un producto -->
                    <tr>
                        <td>Bienvenida</td>
                        <td>https://www.youtube.com/watch?v=JXuzGY8ftd8</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-check-circle fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un producto -->
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">NUEVO VIDEO</h4>
           
        </div>
        <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre video" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>URL</label>
                            <input type="text" class="form-control" placeholder="URL del video a mostrar" value="">
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