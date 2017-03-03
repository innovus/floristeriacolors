@extends('layouts.adminBase')


@section('content')

<div class="col-md-5">
    <div class="card">
        <div class="header">
            <h4 class="title">DESTACADOS</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Id</th>
                    <th>Producto</th>
                   
                </thead>
                <tbody>
                <!--inicio un precio-->
                    <tr>
                        <td>1</td>
                        <td>Rosas</td>
                        <td>
                            
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un precio -->
                <!--inicio un precio-->
                    <tr>
                        <td>2</td>
                        <td>Girasoles</td>
                        <td>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un precio -->
                <!--inicio un precio-->
                    <tr>
                        <td>3</td>
                        <td>Flores exoticas</td>
                        <td>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un precio -->  
                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="col-md-7">
    <div class="card">
        <div class="header">
            <h4 class="title">ADICIONAR PRODUCTO A DESTACADOS</h4>

        </div>
        <div class="content">
            <form>
              
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Escoge el producto</label>
                            <select class="form-control">
                                <option>Rosas</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">ADICIONAR</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

@stop