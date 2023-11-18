var v_esc = document.getElementById("sltEsc").value;

function cargar() {
    const circ = fetch("/balo/assets/dt/votos.json")

    circ.then(res => res.json())
        .then(datos => {
            iniciar(datos);
            console.log(datos);
        });
}

function iniciar(datos) {    
    var subtit = document.getElementById("p-seleccionado");
    var spnc=document.getElementById("sp-nci");
    /*
    $.each(datos, function (circuito, nombresc) {
        $sltEsc.append('<option value=' + datos.circuito + '>' + datos.nombresc + '</option>');
    });*/
    for (let valor of datos) {

        if (v_esc == valor.nombresc) {
        spnc.textContent=`${valor.circuito}`;
        subtit.textContent=`N° ${valor.numesc} - ${valor.nombresc}`;
        }
    }
}

function selecEsc() {    
    const esc = fetch("/balo/assets/dt/votos.json");

    esc.then(resul => resul.json())
        .then(datos => {
            valEsc(datos)
            
        });
}

function valEsc(datos) {
    var v_esc = document.getElementById("sltEsc").value;
    var subtit = document.getElementById("p-seleccionado");
    var spnc=document.getElementById("sp-nci");

    for (let valor of datos) {
        
        //Por escu
        if (v_esc == valor.nombresc) {
            spnc.textContent=`- ${valor.circuito} -`;
            subtit.textContent=`N° ${valor.numesc} - ${valor.nombresc}`;
            contTask2.innerHTML = `
                <img class="log-par" src="../assets/logos/000134.png" alt="logo_agrupacion">
                <p class="sp-votos"><b><span id="tpd-1">${valor.pres_1}</b></span></p>
                `;
            contTask3.innerHTML = `     
                <img class="log-par" src="../assets/logos/000135.png" alt="logo_agrupacion">
                <p class="sp-votos"><b><span id="tpd-2">${valor.pres_2}</b></span></p>
                `;
                
        }
    }
}
