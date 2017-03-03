@extends('layouts.adminBase')


@section('content')

<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mis Productos Registrados</h4>
                                <p class="category">www.floristeriaColors.com</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Categoría</th>
                                        <th>Descripción</th>
                                        <th>Imagen</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody>
                                    <!--inicio un producto -->
                                        <tr>
                                            <td>Caja de 12 rosas</td>
                                            <td>Rosas</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates repudiandae debitis, eligendi veritatis maxime quod, aspernatur modi architecto, quia.</td>
                                            <td>rosas.jpg</td>
                                            <td>
                                                <input type="submit" name="" value="Editar" class="btn btn-success form-control">
                                                <input type="submit" name="" value="Eliminar" class="btn btn-danger form-control ">
                                            </td>
                                        </tr>
                                    <!-- finr un producto -->
                                        <!--inicio un producto -->
                                        <tr>
                                            <td>Caja de 12 rosas</td>
                                            <td>Rosas</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates repudiandae debitis, eligendi veritatis maxime quod.</td>
                                            <td>rosas.jpg</td>
                                            <td>
                                                <input type="submit" name="" value="Editar" class="btn btn-success form-control">
                                                <input type="submit" name="" value="Eliminar" class="btn btn-danger form-control ">
                                            </td>
                                        </tr>
                                    <!-- finr un producto -->
                                    <!--inicio un producto -->
                                        <tr>
                                            <td>Caja de 12 rosas</td>
                                            <td>Rosas</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates repudiandae debitis, eligendi veritatis maxime quod, aspernatur modi architecto, quia.</td>
                                            <td>rosas.jpg</td>
                                            <td>
                                                <input type="submit" name="" value="Editar" class="btn btn-success form-control">
                                                <input type="submit" name="" value="Eliminar" class="btn btn-danger form-control ">
                                            </td>
                                        </tr>
                                    <!-- finr un producto --> 
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

@stop