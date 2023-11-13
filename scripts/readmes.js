var v_mes = document.getElementById("sltMes").value;

function selecMes() {    
    const mes = fetch("../assets/dt/cir-mes.json");

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
            spnc.textContent=`- ${valor.numcir} -`;
            subtit.textContent=`N° ${valor.numesc} - ${valor.nombresc} - Mesa:  ${valor.numesa}  `;
            contTask3.innerHTML = `
                <img class="log-par" src="../assets/logos/000132.png" alt="logo_agrupacion">

                <p class="sp-votos"><b><span id="tpd-1">${valor.pre1}</b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-1">${valor.pan1}</span></p>
                <p class="sp-votos"><span class="tpd-1" id="tdp-1">${valor.dip1}</span></p>
                <p class="sp-votos"><span class="tpr-1" id="tpr-1">${valor.par1}</span></p>
                `;
            contTask1.innerHTML = `     
                <img class="log-par" src="../assets/logos/000133.png" alt="logo_agrupacion">
                <p class="sp-votos"><b><span id="tpd-2">${valor.pre2}</b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-2">${valor.pan2}</span></p>
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
