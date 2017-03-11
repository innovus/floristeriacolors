var cantidadProductosEnCarrito=0;
var cantidadArreglo=0;
var subTotal=0;
function AgregarProducto(){
    var valorProducto=document.getElementById("valorProducto").value;
    var cantidadProducto=document.getElementById("cantidadProducto").value;
    var img=document.getElementById("img").value;
    var nombreProducto=document.getElementById("nombreProducto").value;
    /* remplazamos las (,) de valorProducto por vacio */
    var patron = /,/g,
    nuevoValor    = "",
    nuevaCadena = valorProducto.replace(patron, nuevoValor);
   
   /*aqui ya tengo el valor del arreglo x la cantidad seleccionada */
    var valorXcantidad=parseInt(nuevaCadena)*parseInt(cantidadProducto);
    cantidadProductosEnCarrito= cantidadProductosEnCarrito+parseInt(cantidadProducto);
    cantidadArreglo=cantidadArreglo+parseInt(cantidadProducto);
    subTotal=subTotal+valorXcantidad;
    document.getElementById("cantidadArreglo").innerHTML=cantidadArreglo;
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
    document.getElementById("subtotalCarrito").innerHTML=subTotal;
    document.getElementById("img-Producto").innerHTML='<img src="/img/arreglos/'+img+'" class="img-responsive">';
    document.getElementById("COP").innerHTML='<strong>'+nombreProducto+'</strong> <h4>COP: '+valorProducto+'</h4>';
    document.getElementById("btn-quitar").innerHTML='<button class="btn btn-danger" onclick="quitarProducto()">Quitar</button>';
    
}

function agregarDetalle(cod){
    var valorDetalle =document.getElementById(cod).value;
    var c= document.getElementById("cantidadDetalle"+cod).value;
    var valor =parseInt(valorDetalle)*parseInt(c);

    subTotal=subTotal+parseInt(valor);

    var cantidadDetalle=document.getElementById("cantidadDetalle"+cod).value;
    cantidadProductosEnCarrito= cantidadProductosEnCarrito+parseInt(c);
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
    document.getElementById("subtotalCarrito").innerHTML=subTotal;
    var nombreDetalle= document.getElementById("nombreDetalle"+cod).value;

    var urlimagen=document.getElementById("img"+cod).value;
    var detalleHtml='<div class="row" id="detalle'+cod+'">'+
                         '<div class="col-md-2 col-xs-2 text-center">'+
                            '<div class="cant"><h4 id="ca'+cod+'">'+cantidadDetalle+'</h4></div>'+
                            '<input type="hidden" id="cantDe'+cod+'" value="'+cantidadDetalle+'"/>'+
                        '</div>'+
                        '<div class="col-md-4 col-xs-4" id="img-Producto">'+ 
                            '<img src="'+urlimagen+'" class="img-responsive">'+
                        '</div>'+
                        '<div class="col-md-4 " id="COP">'+ 
                           '<strong>'+nombreDetalle+'</strong> <h4>COP: '+valorDetalle+'</h4>'+   
                        '</div>'+
                        '<div class="col-md-2" id="btn-quitar">'+
                            '<button class="btn btn-danger" onclick="quitarDetalle('+cod+')">Quitar</button>'+      
                        '</div>'+
                    '</div>';
    $( "#canasta" ).append(detalleHtml);
    

}

function quitarProducto(){
    var valorProducto=document.getElementById("valorProducto").value;
    /* remplazamos las (,) de valorProducto por vacio */
    var patron = /,/g,
    nuevoValor    = "",
    nuevaCadena = valorProducto.replace(patron, nuevoValor);

    if (cantidadArreglo==1){
        cantidadArreglo=cantidadArreglo-1;
        document.getElementById("img-Producto").innerHTML='';
        document.getElementById("COP").innerHTML='';
        document.getElementById("btn-quitar").innerHTML='';
        document.getElementById("cantidadArreglo").innerHTML=cantidadArreglo;
        cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
        document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;

    }
    if (cantidadArreglo>0) {
        cantidadArreglo=cantidadArreglo-1;
        document.getElementById("cantidadArreglo").innerHTML=cantidadArreglo;
        cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
        document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;

    }
    subTotal=subTotal- parseInt(nuevaCadena);
    document.getElementById("subtotalCarrito").innerHTML=subTotal;
}

function quitarDetalle(cod){
    var valorDetalle =document.getElementById(cod).value;
    var cantDe=document.getElementById("cantDe"+cod).value;
    if (cantDe==1){
        cantDe=cantDe-1;
        document.getElementById("detalle"+cod).remove();
        cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
        document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
        subTotal=subTotal-parseInt(valorDetalle);
        document.getElementById("subtotalCarrito").innerHTML=subTotal;

    }
    if (cantDe>0) {
        cantDe=cantDe-1;

        document.getElementById("ca"+cod).innerHTML=cantDe;
        document.getElementById("cantDe"+cod).value=cantDe;

        cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
        document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
        subTotal=subTotal-parseInt(valorDetalle);
        document.getElementById("subtotalCarrito").innerHTML=subTotal;
    }
    /**/

}