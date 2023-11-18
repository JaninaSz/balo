//Capturar valores de la URL
const valores = window.location.search;
//Creamos la instancia
const urlParams = new URLSearchParams(valores);
//Accedemos a los valores
var numesc = urlParams.get('es');
var nMesa = urlParams.get('nMesa');

//var opcion =confirm(cargarMesa());
//var opcion = confirm("Estás por cargar la mesa: " + nMesa);
//document.getElementById("numesc").value =numesc;
var nomesas="Todas"
switch (numesc) {
    case "99":
        nomesas="Todas"
        document.getElementById("nomesc").value=nomesas
        break;
    case "32":
        nomesas="Esc. Belgrano"
        break;
    case "2":
        nomesas="Col. Belgrano"
        //document.getElementById("nomesc").textContent = "nomesas"
        //document.getElementById("nomesc").value = nomesas;
    break;
    case "564":
        nomesas="Esc. Sarmiento"
        break;
    case "1":
        nomesas="Esc. Tecnica"
        break;
    case "3":
        nomesas="Col. Sorribes"
        break;
    case "321":        
        nomesas="Esc. Rosende"
        break;
    case "471":
        nomesas="Esc. 16 de Nov."
        break;
    case "435":
        nomesas="Esc. Centenario"
        break;
    case "4":
        nomesas="Col. San Martin"
        break;
    case "565":
        nomesas="Esc. Alberdi"
        break;
    case "572":
        nomesas="Esc. Cazadores"
        break;
    case "575":
        nomesas="Esc. Paraiso"
        break;
    case "585":
        nomesas="Esc. Baibiene"
        break;
    case "38":
        nomesas="Esc. J M Paz"
        break;
    case "410":
        nomesas="Esc. Santa Cruz"
        break;
    default:
            break;
    }
function ocultar() {
    document.getElementById("btn-confir").style.display = "none";
    document.getElementById("p-confirm").innerHTML = "Para evitar errores, deberá <b>confirmar</b> la mesa seleccionada. ";
}
/*var closeButtons = $('.close_window');
closeButtons.on('click', function() {
  $(this).parent().hide();
  var x = document.getElementById("window-notice");
  x.style.display = "none";
});*/

/*function cargarMesa() {
    var opcion = confirm("Estás por cargar la mesa: " + nMesa);
    if (opcion == true) {
        var x = document.getElementById("window-notice");
        x.style.display = "none";
        //document.getElementById("close-button").textContent = "Confirmar MESA " + nMesa;
        //document.getElementById("numMesa").innerHTML = "mesa " + nMesa;
        document.getElementById("numMesa").textContent = " " + nMesa;
    } else {
        window.history.back();
    }
}*/
function verificar() {
    alert(nMesa);
    if(isNaN(nMesa) || (nMesa==null)){
        document.getElementById("p-confirm").textContent = "Se ha encontrado un error.\n Volverá a la página anterior.";
        window.history.back();
    }
}
function continuar() {
    
    if(isNaN(nMesa) || (nMesa==null)){
        alert("Se ha encontrado un error.\n Volverá a la página anterior.");
        window.history.back();
    }
    document.getElementById("p-confirm").textContent = "\nEstás por cargar la mesa "+ nMesa;
    //"\nDisculpe. \n No se admiten, nuevos ingresos.";
    //document.getElementById("p-confirm").style.color="red";
    document.getElementById("close-button").style.display = "none";
    /*textContent = "Confirmar";*/
    document.getElementById("btn-confir").style.display = "flex";

}
function confirmar() {
    var msg = document.getElementById("window-notice");
    msg.style.display = "none";
    const numescu =document.getElementById("numMesa").textContent = numesc;
    document.getElementById("numMesa").textContent = " " + nMesa;
    //document.getElementById("numero_mesa").textContent =parseInt(nMesa);
    document.getElementById("nomesc").value=nomesas;
    document.getElementById("numesc").value =numescu;
    document.getElementById("numeEsa").value =nMesa;
    //document.getElementById("numeEsa").textContent =nMesa;
}

function clikmes(){
    //Para cambiar color boton de modificacion de mesas
}
function regresar() {
    window.history.back();
}
function resetear() {
var confirma= confirm('\n__IMPORTANTE__\n\nSe borrarán todos los datos cargados.\n\n');
    if (confirma==true) {
        frmActa.reset();       
    } else {
        alert("Volviendo");
    }
}
/*
function cargarMesa() {
    var mesa;  
function alerta(){
    var mensaje;
    var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
    } else {
        mensaje = "Has clickado Cancelar";
    }
    document.getElementById("ejemplo").innerHTML = mensaje;
}
var pestActa=0;


    $(document).ready(function()
    {
    
        var nMesa = getParameterByName('nMesa');
document.getElementById("nMesa").textContent="mesa "+nMesa;
pestActa=window.open("tecnica.html","target");
    });

function cargarMesa() {
    var numMesa= document.getElementById("btn1").value;
    document.getElementById("nMesa").textContent="mesa "+numMesa;

var nuMesa = getParameterByName('numMesa');
document.getElementById("nMesa").textContent="mesa "+nuMesa;

}*/

/*Variables para cargar totales desde php
var toa=document.getElementsByName("ta").textContent;
var tob=document.getElementsByName("tb").textContent;
var toc=document.getElementsByName("tc").textContent;
var tod=document.getElementsByName("td").textContent;*/
