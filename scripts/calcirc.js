
function carCirc() { 
    
//Mesas escrutadas
var entEscrut=document.getElementById("e-cantReg").value;
document.getElementById("escrut").textContent = entEscrut;

var entTvot=document.getElementById("e-tvot").value;
document.getElementById("tolvo").textContent = entTvot;

//Presidente total
var entTpd1=document.getElementById("e-tpd1").value;
var entTpd2=document.getElementById("e-tpd2").value;
alert("cal "+entTvot)
document.getElementById("tpd-1").textContent = entTpd1;
document.getElementById("tpd-2").textContent = entTpd2;
//Nulos total
var entTnul=document.getElementById("e-tnul").value;
document.getElementById("spnul").textContent = entTnul;
//Rec total
var entTrec=document.getElementById("e-trec").value;
document.getElementById("sprec").textContent = entTrec;
//Imp total
var entTimp=document.getElementById("e-timp").value;
document.getElementById("spimp").textContent = entTimp;
//Com total
var entTcom=document.getElementById("e-tcom").value;
document.getElementById("spcom").textContent = entTcom;
//Bla total
var entTbla=document.getElementById("e-tbla").value;
document.getElementById("spbla").textContent = "bla "+entTbla;
    alert("pr2"+entTpd2)

}


function selCirc() {  
    var v_cir = document.getElementById("sltCirc").value;
    
    switch (v_cir) {
        case "99":
            alert("Todas")
            carCirc();
            break;
        case "17":
            alert("cir 17")
            //carCirc0();
            //function carCirc0() { 
    
                //Mesas escrutadas
                var entEscrut=document.getElementById("e-cantReg").value;
                document.getElementById("escrut").textContent = entEscrut;
                
                var entTvot=document.getElementById("e0-tvot").value;
                document.getElementById("tolvo").textContent = entTvot;
                
                //Presidente total
                var entTpd1=document.getElementById("e0-tpd1").value;
                var entTpd2=document.getElementById("e0-tpd2").value;
                alert("cal "+entTvot)
                document.getElementById("tpd-1").textContent = entTpd1;
                document.getElementById("tpd-2").textContent = entTpd2;
                //Nulos total
                var entTnul=document.getElementById("e0-tnul").value;
                document.getElementById("spnul").textContent = entTnul;
                //Rec total
                var entTrec=document.getElementById("e0-trec").value;
                document.getElementById("sprec").textContent = entTrec;
                //Imp total
                var entTimp=document.getElementById("e0-timp").value;
                document.getElementById("spimp").textContent = entTimp;
                //Com total
                var entTcom=document.getElementById("e0-tcom").value;
                document.getElementById("spcom").textContent = entTcom;
                //Bla total
                var entTbla=document.getElementById("e0-tbla").value;
                document.getElementById("spbla").textContent = "bla "+entTbla;
                    alert("pr2 "+entTpd2);
                break;
        case "18":
            alert("cir 18")   
            
var entTpd1=document.getElementById("e-tpd1").value;
var entTpd2=document.getElementById("e-tpd2").value;
var entTnul=document.getElementById("e-tnul").value;
            contTask2.innerHTML = `
            
                <img class="log-par" src="../assets/logos/000134.png" alt="logo_agrupacion">
                <br><hr><p class="sp-votos"><b><span id="tpd-1">${entTpd1} </b></span>votos</p><hr>
                `;
            contTask3.innerHTML = `
                <img class="log-par" src="../assets/logos/000135.png" alt="logo_agrupacion">
                <p class="sp-votos"><b> <span  id="tpd-2">${entTpd2} </b></span>votos</p>
                `;  
            contParla.innerHTML = `
            <div>
            <span>Nulos</span><br>
            <span id="spnul">${entTnul} </span>
        </div>
        <div>
            <span>Recurridos</span><br>
            <span id="sprec"></span>
        </div>
        <div>
            <span>Impugnados</span><br>
            <span id="spimp"></span>
        </div>
        <div>
            <span>Comando</span><br>
            <span id="spcom"></span>
        </div>
        <div>
            <span>Blancos</span><br>
            <span id="spbla"></span>
        </div>
        </div>  
        `; 
        break;
        case "19":
            alert("cir 19") 
            var entTpd1=document.getElementById("e-tpd1").value;
            var entTpd2=document.getElementById("e-tpd2").value;
            document.getElementById("tpd-1").textContent = entTpd1;
            document.getElementById("tpd-2").textContent = entTpd2;
            break;
        default:
            break;
    }
}

