function agrupar() {
    var v_circuito = document.getElementById("sltMesa").value;
    /*document.getSelection("op-clima")*/

    var opciones = document.getElementsByTagName("option");
    
    switch (v_circuito) {
        case "99":
            document.getElementById("cir17").style.display="block";
            document.getElementById("cir18").style.display = "block";
            document.getElementById("cir19").style.display = "block";
            document.getElementById("cir20").style.display = "block";
            document.getElementById("cir21").style.display = "block";
            document.getElementById("cir22").style.display = "block";
            break;
        case "17":
            document.getElementById("cir17").style.display="block";
            document.getElementById("cir18").style.display = "none";
            document.getElementById("cir19").style.display = "none";
            document.getElementById("cir20").style.display = "none";
            document.getElementById("cir21").style.display = "none";
            document.getElementById("cir22").style.display = "none";
            break;
        case "18":
            document.getElementById("cir17").style.display = "none";
            document.getElementById("cir18").style.display="block";
            document.getElementById("cir19").style.display = "none";
            document.getElementById("cir20").style.display = "none";
            document.getElementById("cir21").style.display = "none";
            document.getElementById("cir22").style.display = "none";
            break;
        case "19":
            document.getElementById("cir17").style.display = "none";
            document.getElementById("cir18").style.display = "none";
            document.getElementById("cir19").style.display="block";
            document.getElementById("cir20").style.display = "none";
            document.getElementById("cir21").style.display = "none";
            document.getElementById("cir22").style.display = "none";
            break;
        case "20":
            document.getElementById("cir17").style.display = "none";
            document.getElementById("cir18").style.display = "none";
            document.getElementById("cir19").style.display = "none";
            document.getElementById("cir20").style.display="block";
            document.getElementById("cir21").style.display = "none";
            document.getElementById("cir22").style.display = "none";
            break;
        case "21":
            document.getElementById("cir17").style.display = "none";
            document.getElementById("cir18").style.display = "none";
            document.getElementById("cir19").style.display = "none";
            document.getElementById("cir20").style.display = "none";
            document.getElementById("cir21").style.display="block";
            document.getElementById("cir22").style.display = "none";
            break;
        case "22":
            document.getElementById("cir17").style.display = "none";
            document.getElementById("cir18").style.display = "none";
            document.getElementById("cir19").style.display = "none";
            document.getElementById("cir20").style.display = "none";
            document.getElementById("cir21").style.display = "none";
            document.getElementById("cir22").style.display="block";

            break;
        default:
            break;
    }
    /*document.getElementById("txtClima").textContent = "Hoy está " + v_clima.value;
    document.getElementById("resultado").style.backgroundColor = "aquamarine";*/

}

function clikmes(){

}