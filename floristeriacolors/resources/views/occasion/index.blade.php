@extends('layouts.adminBase')


@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="header">
            <h4 class="title">REGISTRAR OCASIÓN</h4>
            <p class="category">www.floristeriaColors.com</p>

        </div>
        <div class="content">
             {!!Form::open(['route'=> 'ocasiones.store', 'method'=>'POST'])!!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        {!!Form::label('Nombre ocasión:')!!}
                        {!!Form::text('ocasion',null,['class'=>'form-control','placeholder'=>'Escribe el nombre de la ocasión'])!!}
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">REGISTRAR</button>
                <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="header">
            <h4 class="title">ADICIONAR PRODUCTO A OCASIÓN</h4>

        </div>
        <div class="content">

             {!!Form::open(['route'=> 'productosOcasiones.store', 'method'=>'POST'])!!}
              
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            {!!Form::label('Ocasion','Escoge la ocasion:')!!}
                            {!!Form::select('occasion_id',$occasions,null,['class'=>'form-control'])!!}

                         <!--   {!!Form::label('Product','Escoge el producto:')!!}
                            {!!Form::select('product_id',$products,null,['class'=>'form-control'])!!}-->
                        </div>
                        <div class="form-group">
                            <form>
                              <div class="multiselect">
                                <div class="selectBox "  onclick="showCheckboxes()" >
                                  <select class="form-control">
                                    <option>{!!Form::label('Product','Escoge el producto')!!}</option>
                                  </select>
                                  <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes">
                                @foreach($products as $product)


                                    <label for="one" class="form-control">
                                        <input type="checkbox" id="" checked="" />{{$product->nombre}}
                                    </label>
                                    

                                @endforeach
                                  
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                     
                </div>

                <button type="submit" class="btn btn-info btn-fill pull-right">ADICIONAR</button>
                <div class="clearfix"></div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="header">
            <h4 class="title">OCASIONES REGISTRADAS</h4>
                    </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    
                </thead>
                <tbody>

                <!--inicio una categoria -->
                @foreach($ocasiones as $ocasion)
                 <tr>
                        <td>{{$ocasion->ocasion}}</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                @endforeach
                   
                <!-- fin una categoria-->
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
<script type="text/javascript">
    var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>
@stop