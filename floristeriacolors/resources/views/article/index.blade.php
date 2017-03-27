@extends('layouts.adminBase')


@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">PUBLICACIONES EN MI BLOG FLORAL</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                
                @foreach($articles as $article)
                <!--inicio un producto -->
                <tr>
                        <td>{{$article->titulo}}</td>
                        <td>{{$article->descripcion}}</td>
                        <td><img src="/img/arreglos/{{$article->imagen}}" class="img-responsive" style="width: 500px;"></td>
                        <td>
                            <a href="/admin/articulos/{{$article->id}}/edit" class="btn btn-success"  ><span class="fa fa-pencil fa-1x"></span></a>
                           
                            {!!Form::open(['route'=>['articulos.destroy',$article->id],'method'=>'DELETE'])!!}
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>

                            {!!Form::close()!!}
                            
                        </td>
                    </tr>
                <!-- finr un producto -->

                @endforeach
                    
                </tbody>
            </table>

        </div>
    </div>
</div>

@stop