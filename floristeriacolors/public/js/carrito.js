var cantidadProductosEnCarrito=0;
var subTotal=0;
function AgregarProducto(){
    var valorProducto=document.getElementById("valorProducto").value;
    var cantidadProducto=document.getElementById("cantidadProducto").value;

    /* remplazamos las (,) de valorProducto por vacio */
    var patron = /,/g,
    nuevoValor    = "",
    nuevaCadena = valorProducto.replace(patron, nuevoValor);
   
   /*aqui ya tengo el valor del arreglo x la cantidad seleccionada */
    var valorXcantidad=parseInt(nuevaCadena)*parseInt(cantidadProducto);
    cantidadProductosEnCarrito= cantidadProductosEnCarrito+1;
    subTotal=subTotal+valorXcantidad;
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
    document.getElementById("subtotalCarrito").innerHTML=subTotal;
    alert(subTotal)
}

function agregarDetalle(cod){
    var valorDetalle =document.getElementById(cod).value;
    subTotal=subTotal+parseInt(valorDetalle);
    cantidadProductosEnCarrito= cantidadProductosEnCarrito+1;
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
    document.getElementById("subtotalCarrito").innerHTML=subTotal;
    alert(subTotal);

}