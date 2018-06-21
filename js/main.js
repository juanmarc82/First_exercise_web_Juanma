//var stock_productos_1 = 5;
//var id_producto_1 = 1;
//var precio_producto_1 = 10;
//
//var stock_productos_2 = 4;
//var id_producto_2 = 2;
//var precio_producto_2 = 8;
//
//var stock_productos_3 = 6;
//var id_producto_3 = 3;
//var precio_producto_3 = 12;
//
//var stock_productos_4 = 3;
//var id_producto_4 = 4;
//var precio_producto_4 = 5;

var total_articulos = 0;
var total_euros = 0;
var producto1 = {
    id:1,
    precio:10,
    stock:5,
    nombre:"Producto 1"
}
    
var producto2 = {
    id:2,
    precio:8,
    stock:4,
    nombre:"Producto 2"
}
    
var producto3 = {
    id:3,
    precio:12,
    stock:6,
    nombre:"Producto 3"
}

function addCarrito(producto) {
   // validamos que el stock del producto no sea 0.
    if(producto.stock>0) {
        // Descontamos un producto del stock 
        //porque los estamos añadiendo al carrito.
        
        producto.stock = producto.stock - 1;
        //producto.stock-- => Esta sería la forma abreviada.
        
        // Añadimos el articulo a la cesta.
        
        total_articulos = total_articulos + 1;
        //total_articulos++ => Esta sería la forma abreviada.
        
        // Añadimos el precio del producto al total_euros 
        //que es la cuenta del carrito.
        total_euros = total_euros + producto.precio;
        //total_euros+=producto.precio => Esta sería la forma abreviada.
        
        // al escribir "document" estamos llamando al DOM (documento html que crea el navegador) 
        // .getElementById("") sirve para coger un elemento del HTML al cual llamamos a traves de su Id. En este caso el elemento con id numero.
        
        var numero = document.getElementById("numero");
        //console.dir(numero_articulo);
        
        
        numero.innerHTML= total_articulos;
        
       // console.log('Total número de artículos: ' + total_articulos);
        //console.log('Total Euros: ' + total_euros);
        
        var total = document.getElementById("total");
        
        total.innerHTML = total_euros;
    } else {
        var mensajes = document.getElementById("mensajes");
        mensajes.innerHTML = "No existen más unidades del producto " + producto.nombre;
    }
    
    var enlaces = document.getElementsByTagName("body"); // Con este codigo lo que hacemos es coger los elementos del HTML por su tipo de elemento (en este caso los a, pero podria ser un div, un label, ...)
    console.log(enlaces);
    
    var enlacesByClass = document.getElementsByClassName("estiloProductos");
    console.log(enlacesByClass);
    
    
    return false;
}

//var enlaces = document.getElementByTagName("body");
//var enlacesByClass = document.getElementsByClassName("estilo");
//console.log(enlacesByClass);

function validarFormulario(){
    var nombre = document.getElementById("nombre");
    var apellidos = document.getElementById("apellido");
    var telefono = document.getElementById("telefono");
    //console.log(nombre.value);
    
    var etiqueta_error_nombre = document.getElementById("error-nombre")
    if(nombre.value< String.length) {
       // alert("Requerido");
        etiqueta_error_nombre.innerHTML = "Requerido";
        // Cambio de estilo a través de JS. Pongo borde rojo en esta condición.
        document.getElementById("nombre").style.border = "1px solid red";
    } else {
        etiqueta_error_nombre.innerHTML = "";
        document.getElementById("nombre").style.border = "";
    } 
    
    var etiqueta_error_apellido = document.getElementById("error-apellido");
    if(apellidos.value=='') {
        //alert("Requerido");
        etiqueta_error_apellido.innerHTML = "Requerido";
        
        document.getElementById("apellido").style.border = "1px solid red";
    } else {
        etiqueta_error_apellido.innerHTML ="";
        document.getElementById("apellido").style.border = "";
    }
    
    var etiqueta_error_telefono = document.getElementById("error-telefono");    
    if(telefono.value=='') {
        //alert("Requerido");
        etiqueta_error_telefono.innerHTML = "Requerido";
        document.getElementById("telefono").style.border = "1px solid red";
    } else {
        etiqueta_error_telefono.innerHTML = "";
        document.getElementById("telefono").style.border = "";
    }
    
//    var errores = document.getElementsByClassName("error");
//    
//    for(i=0;i<errores.length;i++){
//        console.log(errores[i]);
//        errores[i].innerHTML = "Requerido"
//    }
//    console.log(errores);
    
//    alert("Estamos validando el formulario");
    
    
    return;
}

document.getElementById("miBoton").addEventListener("click", function() {
            alert("click");
        });
var img_logo = document.getElementById("miImagen");

function cambiarImagen(){
    document.getElementById("")
}




 onMouseOver="this.style.background='black'; this.style.cursor='hand'; this.style.color='white';" onMouseOut="this.style.background='burlywood';"




