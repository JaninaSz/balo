var v_mes = document.getElementById("sltMes").value;

function selecMes() {    
    const mes = fetch("../assets/dt/votos.json");

    mes.then(resul => resul.json())
        .then(datos => {
            valMes(datos)
            console.log(datos);
        });
}

function valMes(datos) {
    var v_mes = document.getElementById("sltMes").value;
    var subtit = document.getElementById("p-seleccionado");
    var spnc=document.getElementById("sp-nci");

    for (let valor of datos) {
        
        //Por escu
        if (v_mes == valor.numesa) {
            spnc.textContent=`- ${valor.circuito} -`;
            subtit.textContent=`N° ${valor.numesc} - ${valor.nombresc} - Mesa:  ${valor.numesa}  `;
                        
            contTask2.innerHTML = `
                <img class="log-par" src="../assets/logos/000134.png" alt="logo_agrupacion">
                <p class="sp-votos"><b><span id="tpd-1">${valor.pres_1}</b></span></p>
                `;
            contTask3.innerHTML = `
                <img class="log-par" src="../assets/logos/000135.png" alt="logo_agrupacion">
                <p class="sp-votos"><b><span id="tpd-1">${valor.pres_2}</b></span></p>
                `;
            
        }
    }
}
