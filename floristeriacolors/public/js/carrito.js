var cantidadProductosEnCarrito=0;
var cantidadArreglo=0;

var arrayCarrito = new Array();
var objeto = {"nombreObjeto": null,"idObjeto":null,"valorObjeto": null, "cantidadObjeto": null};
var subTotal=0;
function verCarrito(){
    if(cantidadProductosEnCarrito==0){
        document.getElementById("mensajeVacio").innerHTML="CARRITO DE COMPRAS VACIO";
    }else{

        document.getElementById("mensajeVacio").innerHTML="";
    }
}
function AgregarProducto(){
    //aqui en codigo arreglo esta estatico faltaria ir por el codigo real 
    var codigoArreglo=99;
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
    document.getElementById("btn-quitar").innerHTML='<a class="btn btn-primary " onclick="quitarProducto()">quitar</a>';
    
    //datos del nuevo arreglo a registrar
    var idObjeto=codigoArreglo;
    var nombreObjeto = nombreProducto; 
    var valorObjeto = parseInt(nuevaCadena);
    var cano = parseInt(cantidadProducto);  
    //averiguamos si ya hay un producto agregado
    
    if(arrayCarrito.length==0){
        //Insertamos objeto en Array:
        arrayCarrito.push(

            {   "nombreObjeto": nombreObjeto,
                "idObjeto":idObjeto,
                "valorObjeto": valorObjeto,
                "cantidadObjeto": cano
            });  
    }
    else
    {
        for (var i=0;i< arrayCarrito.length; i++){

            if (arrayCarrito[i].idObjeto==codigoArreglo) {
                var t=cano;
                var k=arrayCarrito[i].cantidadObjeto;
                arrayCarrito[i].cantidadObjeto=t+k;
            }  
        }
    }     
    console.log("Array despues de añadir este objeto: ");
    console.log(arrayCarrito);    
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
                        '<a class="btn btn-primary " onclick="quitarDetalle('+cod+')">quitar</a>'+
                        '</div>'+
                    '</div>';
    $( "#canasta" ).append(detalleHtml);
   //datos del nuevo arreglo a registrar
    var idObjeto=cod;
    var nombreObjeto = nombreDetalle; 
    var valorObjeto = parseInt(valorDetalle);
    var cano = parseInt(c);   
    //averiguamos si ya hay un producto agregado
    
    if(arrayCarrito.length==0){
        //Insertamos objeto en Array:
        arrayCarrito.push(

            {   "nombreObjeto": nombreObjeto,
                "idObjeto":idObjeto,
                "valorObjeto": valorObjeto,
                "cantidadObjeto": cano
            });  
    }
    else{
           if(arrayCarrito.length>0){
                /**/
                var bandera=0;
                for(var i=0; i< arrayCarrito.length;i++){
                
                
                   /*primera comdicion*/
                        if (arrayCarrito[i].idObjeto ==cod) {
                            //si ya hay un arreglo con el mismo id entonces se agrega 
                            //la nueva cantidad a la cantidad que ya esta
                            var t=cano;
                            var k=arrayCarrito[i].cantidadObjeto;
                            arrayCarrito[i].cantidadObjeto=t +k;
                            bandera=0;   
                        }
                        else{
                            bandera=bandera+1;
                        }
                }
                /**/
                if (bandera>0) {
                    arrayCarrito.push(

                    {   "nombreObjeto": nombreObjeto,
                        "idObjeto":idObjeto,
                        "valorObjeto": valorObjeto,
                        "cantidadObjeto": cano
                    });
                }
                
            }

    }
    console.log("Array despues de añadir este objeto: ");
    console.log(arrayCarrito);  

}

function quitarProducto(){
    //aqui en codigo arreglo esta estatico faltaria ir por el codigo real 
    var codigoArreglo=99;
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
        subTotal=subTotal- parseInt(nuevaCadena);
        document.getElementById("subtotalCarrito").innerHTML=subTotal;
    }
    if (cantidadArreglo>0) {
        cantidadArreglo=cantidadArreglo-1;
        document.getElementById("cantidadArreglo").innerHTML=cantidadArreglo;
        cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
        document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
        subTotal=subTotal- parseInt(nuevaCadena);
        document.getElementById("subtotalCarrito").innerHTML=subTotal;
    }
    /* codigo para eliminar un producto del arrayCarrito*/
   
    var codProducto= codigoArreglo;
    for (var i = 0; i < arrayCarrito.length; i++) {

      if (arrayCarrito[i].idObjeto == codProducto) {

            if(arrayCarrito[i].cantidadObjeto>1){
                var k=arrayCarrito[i].cantidadObjeto;
                arrayCarrito[i].cantidadObjeto=k-1;
            }
            else{
                arrayCarrito.splice(i,1);
            }
        }   
    }
    console.log("Array despues de eliminar el prodcuto: ");
    console.log(arrayCarrito);

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
    /*------------------------------------*/
    
    var codDeatlle= cod;
    for (var i = 0; i < arrayCarrito.length; i++) {

      if (arrayCarrito[i].idObjeto == codDeatlle) {

            if(arrayCarrito[i].cantidadObjeto>1){
                var k=arrayCarrito[i].cantidadObjeto;
                arrayCarrito[i].cantidadObjeto=k-1;
            }
            else{
                arrayCarrito.splice(i,1);
            }
        }   
    }
    console.log("Array despues de eliminar el detalle: ");
    console.log(arrayCarrito);
}