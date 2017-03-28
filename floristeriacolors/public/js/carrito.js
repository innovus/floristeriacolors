var cantidadProductosEnCarrito=0;
var cantidadArreglo=0;
var arrayCarrito = new Array();
var arrayFinal={};
var objeto = { "idObjeto":null, "nombreObjeto": null,"valorObjeto": null, "cantidadObjeto": null};
var subTotal=0;

function init(){

}


function verCarrito(){

     $.ajax({
        type: "GET",
        url: "/carroVS",
        success:function(data) {
             arrayCarrito = data;
             arrayFinal = arrayCarrito;
                if(cantidadProductosEnCarrito==0){
            
                    document.getElementById("canasta").innerHTML="CARRITO DE COMPRAS VACIO";
                }else{
                    console.log(arrayFinal)

           
                    document.getElementById("canasta").innerHTML="";
                    for (var i =0;i< arrayFinal.length; i++) {
                  
                            var inserta='<div class="row">'+
                                '<h4 id="mensajeVacio"></h4>'+
                                '<div class="col-md-2 col-xs-2 text-center" id="cantidadArreglo"><div class="cant"><h4>'+arrayFinal[i].cantidadObjeto+'</h4></div></div>'+
                                '<div class="col-md-4 col-xs-4" id="img-Producto"><img src="/img/arreglos/'+arrayFinal[i].imagen+'" class="img-responsive"></div>'+
                                '<div class="col-md-4 " id="COP"><strong>'+arrayFinal[i].nombreObjeto+'</strong> <h5>'+arrayFinal[i].valorObjeto+'</h5><h4>'+arrayFinal[i].tamaño+'</h4></div>'+
                                '<div class="col-md-2" id="btn-quitar"><a class="btn btn-primary " onclick="quitarProducto('+arrayFinal[i].idObjeto+','+arrayFinal[i].valorObjeto+')">quitar</a></div>'+
                                '</div><br>';

                            $( "#canasta" ).append(inserta);
                    }
                } 
        });
   

    //$("#LookCar").click(function(){

        //$("#addcirculo").fadeOut();
     

//});

    

}
function AgregarProducto(){
    var band=0;
    //aqui en codigo arreglo esta estatico faltaria ir por el codigo real 
    var codigoArreglo=parseInt(document.getElementById("cc").value);
    var valorProducto=document.getElementById("valorProducto").value;
    var cantidadProducto=document.getElementById("cantidadProducto").value;
    var img=document.getElementById("img").value;
    var nombreProducto=document.getElementById("nombreProducto").value;
    var selectBox = document.getElementById("selectTamaño");
    var selectBox1 = selectBox.options[selectBox.selectedIndex].text;
    /* remplazamos las (,) de valorProducto por vacio */
    var patron = /,/g,
    nuevoValor    = "",
    nuevaCadena = valorProducto.replace(patron, nuevoValor);
    
    /*aqui ya tengo el valor del arreglo x la cantidad seleccionada */
    var valorXcantidad=parseInt(nuevaCadena)*parseInt(cantidadProducto);
    cantidadProductosEnCarrito= cantidadProductosEnCarrito+parseInt(cantidadProducto);
    cantidadArreglo=cantidadArreglo+parseInt(cantidadProducto);
    subTotal=subTotal+valorXcantidad;
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;
 
    //datos del nuevo arreglo a registrar
    var idObjeto=codigoArreglo;
    var nombreObjeto = nombreProducto; 
    var valorObjeto = parseInt(nuevaCadena);
    var cano = parseInt(cantidadProducto);  
    //averiguamos si ya hay un producto agregado
    
    if(arrayCarrito.length==0){
        //Insertamos objeto en Array:
        arrayCarrito.push(

            {  
                "idObjeto":idObjeto,
                "nombreObjeto": nombreObjeto,
                "valorObjeto": valorObjeto,
                "cantidadObjeto": cano,
                "tamaño":selectBox1,
                "imagen":img
            });  
    }
    else
    {
        if (arrayCarrito.length>0) {
            
            for (var i=0;i< arrayCarrito.length; i++){

            
                if (arrayCarrito[i].tamaño==selectBox1) {
                    var t=cano;
                    var k=arrayCarrito[i].cantidadObjeto;
                    arrayCarrito[i].cantidadObjeto=t+k;
                    band=0;
                }
                else{
                    
                    band=band+1;
                    //alert("bandera si no es igual:"+band)
                }
             
            }
            if (band>0) {

                    //alert(selectBox1);
                    var cantidadPro=document.getElementById("cantidadProducto").value;
                    var tt=parseInt(cantidadPro);
                    arrayCarrito.push(
                    
                    {  
                        "idObjeto":idObjeto,
                        "nombreObjeto": nombreObjeto,
                        "valorObjeto": valorObjeto,
                        "cantidadObjeto": tt,
                        "tamaño":selectBox1,
                        "imagen":img
                    }); 

                    band=0; 
            }


        }
    }     
    console.log("Array despues de añadir este objeto: ");
    arrayFinal=arrayCarrito;
    console.log(arrayFinal);
    ActualizarVS()
    mensaje();    
}
/*----------------------------------------------------------------------------------*/
function agregarDetalle(cod){

    var nombreDetalle= document.getElementById("nombreDetalle"+cod).value;
    var tamaño=document.getElementById("tamDeta").value;
    var valorDetalle =document.getElementById(cod).value;
    var cantidadDetalle=document.getElementById("cantidadDetalle"+cod).value;
    var urlimagen=document.getElementById("img"+cod).value;
    var valor =parseInt(valorDetalle)*parseInt(cantidadDetalle);    

    subTotal=subTotal+parseInt(valor);
    document.getElementById("subtotalCarrito").innerHTML="$ "+subTotal;

    cantidadProductosEnCarrito= cantidadProductosEnCarrito+parseInt(cantidadDetalle);
    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;

   //datos del nuevo arreglo a registrar
    var idObjeto=cod;
    var nombreObjeto= nombreDetalle; 
    var valorObjeto= parseInt(valorDetalle);
    var cantidadObjeto=parseInt(cantidadDetalle);
    var tamaño= tamaño;
    var imagen=urlimagen;
     
    //averiguamos si ya hay un producto agregado
    
    if(arrayCarrito.length==0){
        //Insertamos objeto en Array:
        arrayCarrito.push(

            {   "idObjeto":idObjeto,
                "nombreObjeto": nombreObjeto,
                "valorObjeto": valorObjeto,
                "cantidadObjeto":cantidadObjeto,
                "tamaño":tamaño,
                "imagen":imagen
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
                            arrayCarrito[i].cantidadObjeto=arrayCarrito[i].cantidadObjeto +cantidadObjeto ;
                            bandera=0;   
                        }
                        else{
                            bandera=bandera+1;
                        }
                }
                /**/
                if (bandera>0) {
                    arrayCarrito.push(

                    {   
                        "idObjeto":idObjeto,
                        "nombreObjeto": nombreObjeto,
                        "valorObjeto": valorObjeto,
                        "cantidadObjeto": cantidadObjeto,
                        "tamaño":tamaño,
                        "imagen":imagen
                    });
                }
                
            }

    }
    console.log("Array despues de añadir este objeto: ");
    arrayFinal=arrayCarrito;
    console.log(arrayFinal);
    ActualizarVS();
    mensaje();

}

function quitarProducto(idOb,valors){
   
    //aqui en codigo arreglo esta estatico faltaria ir por el codigo real 
    var codigoArreglo=idOb;
    var valorProducto=valors;
    /* codigo para eliminar un producto del arrayCarrito*/
    for (var i = 0; i < arrayFinal.length; i++) {

        if (arrayFinal[i].idObjeto==codigoArreglo) {

            if (arrayFinal[i].valorObjeto==valorProducto) {
                if (arrayFinal[i].cantidadObjeto>1) {
                    arrayFinal[i].cantidadObjeto=arrayFinal[i].cantidadObjeto-1
                    cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
                    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
                    subTotal=subTotal- valorProducto;
                    document.getElementById("subtotalCarrito").innerHTML=subTotal;
                    verCarrito();
                }
                else{
                    
                    arrayFinal[i].cantidadObjeto=arrayFinal[i].cantidadObjeto-1
                    cantidadProductosEnCarrito=cantidadProductosEnCarrito-1;
                    document.getElementById("cantidad").innerHTML=cantidadProductosEnCarrito;
                    subTotal=subTotal- valorProducto;
                    document.getElementById("subtotalCarrito").innerHTML=subTotal;
                    arrayCarrito.splice(i,1);
                    verCarrito();
                }
            }
        }  
    }
    console.log("Array despues de eliminar el prodcuto: ");
    ActualizarVS()
    console.log(arrayCarrito);

}

function quitarDetalle(cod){

    var valorDetalle =document.getElementById(cod).value;
    var cantDe=document.getElementById("cantDe"+cod).value;  
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
    ActualizarVS()
    console.log(arrayCarrito);
}


/* script para colocar el precio de un arreglo segun el tamño*/
function changeFunc() {
    var selectBox = document.getElementById("selectTamaño");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    document.getElementById("valorProducto").value=selectedValue;
    document.getElementById("precioT").innerHTML=selectedValue;
    var selectBox1 = selectBox.options[selectBox.selectedIndex].text;
    
}

/*js para el objeto que aparece y desaparece*/

function mensaje(){
    $("#addcirculo").fadeIn();
    $("#addcirculo").fadeOut(1900);

}

function ActualizarVS(){
    console.log(JSON.stringify(arrayCarrito));

    $.ajax({
        type: "POST",
        url: "/carroVS",
        data: JSON.stringify(arrayCarrito),
        contentType: "json",
        processData: false,
        success:function(data) {
            console.log(data);
        
        } 
    });
        
}

    