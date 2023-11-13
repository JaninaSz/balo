// onload="cargar ()"
function cargar() {
    const circ = fetch("../assets/dt/cirok.json")

    circ.then(res => res.json())
        .then(datos => {
            iniciar(datos);
            console.log(datos);
        });
}

function iniciar(datos) {    
    var subtit = document.getElementById("p-seleccionado");
    var spnc=document.getElementById("sp-nci");
    spnc.textContent=`- ${valor.numcir} -`;
   /* $.each(datos, function (numcir, nombresc) {
        $sltEsc.append('<option value=' + datos.numcir + '>' + datos.nombresc + '</option>');
    });*/
    for (let valor of datos) {

        if (v_esc == valor.nombresc) {
        
        subtit.textContent=` N° ${valor.numesc} - ${valor.nombresc}`;
        }
    }
}

$(document).ready(function(){
        
});
function selecCirc() {
    const circ = fetch("../assets/dt/cirok.json");
   
    circ.then(resul => resul.json())
        .then(datos => {
            valCir(datos)
            console.log(datos);
        });
    }
function valCir(datos) {  
    var v_cir = document.getElementById("sltCirc").value;
    for (let valor of datos) {
        if (v_cir == valor.numcir) {
        
            contTask3.innerHTML = `
                <img class="log-par" src="../assets/logos/000132.png" alt="logo_agrupacion">

                <p class="sp-votos"><b><span id="tpd-1">${valor.pre1}</b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-1">${valor.pan1}</span></p>
                <p class="sp-votos"><span class="tpd-1" id="tdp-1">${valor.dip1}</span></p>
                <p class="sp-votos"><span class="tpr-1" id="tpr-1">${valor.par1}</span></p>
                `;
            contTask1.innerHTML = `     
                <img class="log-par" src="../assets/logos/000133.png" alt="logo_agrupacion">
                <p class="sp-votos"><b> <span  id="tpd-2">${valor.pre2}</b></span></p>
                <p class="sp-votos"><span id="tpn-2">${valor.pan2}</span></p>
                <div class="sp-gris"><p> <span ></span></p></div>
                <div class="sp-gris"><p> <span ></span></p></div>`
            contTask2.innerHTML = `
                <img class="log-par" src="../assets/logos/000134.png" alt="logo_agrupacion">

                <p class="sp-votos"><b><span id="tpd-1">${valor.pre3}</b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-2">${valor.pan3}</span></p>
                <p class="sp-votos"><span class="tpd-1" id="tdp-1">${valor.dip3}</span></p>
                <p class="sp-votos"><span class="tpr-1" id="tpr-1">${valor.par3}</span></p>
                `;
            contTask4.innerHTML = `
                <img class="log-par" src="../assets/logos/000135.png" alt="logo_agrupacion">

                <p class="sp-votos"><b><span id="tpd-1">${valor.pre4}</b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-2">${valor.pan4}</span></p>
                <p class="sp-votos"><span class="tpd-1" id="tdp-1">${valor.dip4}</span></p>
                <p class="sp-votos"><span class="tpr-1" id="tpr-1">${valor.par4}</span></p>
                `;
            contTask5.innerHTML = `     
                <img class="log-par" src="../assets/logos/000136.png" alt="logo_agrupacion">
                <p class="sp-votos"><b><span id="tpd-2">${valor.pre5}</b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-2">${valor.pan5}</span></p>
                <div class="sp-gris"><p> <span ></span></p></div>
                <div class="sp-gris"><p> <span ></span></p></div>
                `
        }
    }
    
}