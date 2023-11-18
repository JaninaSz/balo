//var v_cir = document.getElementById("sltCirc").value;

// onload="cargar ()"
function cargar() {
    const circ = fetch("../assets/dt/votodos.json")

    circ.then(res => res.json())
        .then(data => {
            iniciar(data);
            console.log(data);
        });
}

function iniciar(data) {    
    var subtit = document.getElementById("p-seleccionado");
    var spnc=document.getElementById("sp-nci");
    spnc.textContent=`- ${valor.circuito} -`;
    
    /*$.each(data, function (circuito, nombresc) {
        $sltEsc.append('<option value=' + data.circuito + '>' + data.nombresc + '</option>');
    });*/
    for (let valor of data) {
        alert (valor.circuito)
        if (v_esc == valor.nombresc) {
        
        subtit.textContent=` N° ${valor.numesc} - ${valor.nombresc}`;
        }
        alert ("circok "+valor.circuito)
    }
}
/*
$(document).ready(function(){
        
});*/
function selecCirc() {
    const circ = fetch("../assets/dt/votodos.json");
   
    circ.then(resul => resul.json())
        .then(data => {
            valCir(data)
            console.log(data);
        });        
    }
function valCir(data) {  
    var v_cir = document.getElementById("sltCirc").value;
    
    for (let valor of data) {
        if (v_cir == valor.circuito) {
            
            contTask2.innerHTML = `
            
                <img class="log-par" src="../assets/logos/000134.png" alt="logo_agrupacion">
                <br><hr><p class="sp-votos"><b><span id="tpd-1">${valor.pres_1}</b> votos</span></p>
                `;
            contTask3.innerHTML = `
                <img class="log-par" src="../assets/logos/000135.png" alt="logo_agrupacion">
                <br><hr><p class="sp-votos"><b><span  id="tpd-2">${valor.pres_2}</b></span> votos</p>
                `;  
            contParla.innerHTML = `
            <div>
            <span>Nulos</span><br>
            <span id="spnul">${valor.vtnul}</span>
        </div>
        <div>
            <span>Recurridos</span><br>
            <span id="sprec">${valor.vtrec}</span>
        </div>
        <div>
            <span>Impugnados</span><br>
            <span id="spimp">${valor.vtimp}</span>
        </div>
        <div>
            <span>Comando</span><br>
            <span id="spcom">${valor.vtcom}</span>
        </div>
        <div>
            <span>Blancos</span><br>
            <span id="spbla">${valor.vtbla}</span>
        </div>
        </div>  
        `; 
        }
    }
    
}