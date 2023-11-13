

//EstadisticasFijas
var entTbpd=document.getElementById("e-tbpd").value;
var entTnpd=document.getElementById("e-tnpd").value;
var entTtpd=document.getElementById("e-ttpd").value;
//Mesas escrutadas
var entEscrut=document.getElementById("e-cantReg").value;

//calcular el porcentaje de participacion, sobre el tot de electores
document.getElementById("por-bla").textContent = entTbpd;
document.getElementById("por-anu").textContent = entTnpd;

document.getElementById("tolvo").textContent = entTtpd;
document.getElementById("escrut").textContent = entEscrut;

//Porcentaje participacion
//total 5 circuitos: 34.064 personas 
totalpersonas=34064
document.getElementById("tolvo").textContent = entTtpd;
//Mesas escrutadas
totalmesas=101
votaron=25600
partici=(votaron/totalpersonas)*100;
porParti= Number(partici.toFixed(2));
alert(porParti);
document.getElementById("pf-partici").textContent = porParti;
document.getElementById("por-par").textContent = 75,15;

function actualizar(){
    var estado =document.getElementById("dv-load").style.display;
  if(estado=="none"){
      document.getElementById("dv-load").style.display="flex";
  }else{
      document.getElementById("dv-load").style.display="none";        
  }  
}




