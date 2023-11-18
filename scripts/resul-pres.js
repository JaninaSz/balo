
//Presidente
      var entTpd1=document.getElementById("e-tpd1").value;
      var entTpd2=document.getElementById("e-tpd2").value;
      
      document.getElementById("tpd-1").textContent = entTpd1;
      document.getElementById("tpd-2").textContent = entTpd2;
      
      
//Calcular porcentajes
//votos/total*100
totalpersonas=34064
votaron=800
function porcentajes(){
calPd1=(entTpd1/votaron)*100;
calPd2=(entTpd2/votaron)*100;


var numero = 1.77777777;
numero = Number(numero.toFixed(2));
console.log(numero); // Muestra 1.78
porPd1= Number(calPd1.toFixed(2));
porPd2= Number(calPd2.toFixed(2));

/*porPd1=Math.round(calPd1);
porPd2=Math.round(calPd2);
porPd3=Math.round(calPd3);
porPd4=Math.round(calPd4);
porPd5=Math.round(calPd5);
alert(porPd1);
alert(porPd2);
alert(porPd3);
alert(porPd4);
alert(porPd5);*/
document.getElementById("p-porPd1").textContent = porPd1;
    
document.getElementById("p-porPd2").textContent = porPd2;

}