
//*EstadisticasFijas
var entTbla=document.getElementById("e-tbla").value;
var entTnul=document.getElementById("e-tnul").value;
var entTvot=document.getElementById("e-tvot").value;
//Mesas escrutadas
var entEscrut=document.getElementById("e-cantReg").value;

//calcular el porcentaje de participacion, sobre el tot de electores
document.getElementById("por-bla").textContent = entTbla;
document.getElementById("por-anu").textContent = entTnul;

document.getElementById("tolvo").textContent = entTvot;
document.getElementById("escrut").textContent = entEscrut;

//Porcentaje participacion
//total 5 circuitos: 34.064 personas 
totalpersonas=34064
//document.getElementById("tolvo").textContent = entTtpd;
//Mesas escrutadas
totalmesas=101
votaron=1600
partici=(entTvot/totalpersonas)*100;
porParti= Number(partici.toFixed(2));
alert(porParti);
document.getElementById("pf-partici").textContent = porParti;
document.getElementById("por-par").textContent = porParti;

function actualizar(){
   
    var estado =document.getElementById("dv-load").style.display;
  if(estado=="none"){
      document.getElementById("dv-load").style.display="flex";
  }else{
      document.getElementById("dv-load").style.display="none";        
  }  
}

