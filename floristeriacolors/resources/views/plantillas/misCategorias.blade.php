@extends('layouts.adminBase')


@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="header">
            <h4 class="title">REGISTRAR CATEGORIA</h4>
            <p class="category">www.floristeriaColors.com</p>

        </div>
        <div class="content">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nombre categoria</label>
                            <input type="text" class="form-control" placeholder="Escribe el nombre de la nueva categoria" value="">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="header">
            <h4 class="title">MIS CATEGORIAS REGISTRADAS</h4>
                    </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    
                </thead>
                <tbody>
                <!--inicio una categoria -->
                    <tr>
                        <td>Rosas</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- fin una categoria-->
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
@stop