var d = new Date();

  /*document.getElementById("current_date").innerHTML = getHours();
  window.onload = function () {
    window.setTimeout('getSecs()', 1000);
}

  myDate = new Date();
  hours = myDate.getHours();
  minutes = myDate.getMinutes();
  seconds = myDate.getSeconds();
  if (hours < 10) hours = 0 + hours;
    if (minutes < 10) minutes = "0" + minutes;
      if (seconds < 10) seconds = "0" + seconds;
        let HoraActual = hours + ":" + minutes + ":" + seconds
        window.setTimeout('getSecs()', 1000); */
       

/*
var closeButtons = $('.close_window');
closeButtons.on('click', function() {
  $(this).parent().hide();
});*/

function validar() {
  var usuario = document.getElementById("user").value;
  //var usuario = document.getParameterByName("user");
  
  if (usuario=="Yiyi"){
    alert("Bienvenid@ " +usuario);
  }else{
    alert(usuario+" No está registrado.");
    return false;
  }
  }
/*
function confirmActa() {
  //Capturar valores de la URL
  const valores = window.location.search;
  //Creamos la instancia
  const urlParams = new URLSearchParams(valores);
  //Accedemos a los valores
  var nMesa = urlParams.get('nMesa');
  var numesc = urlParams.get('es');
  document.getElementById("numesc").value =numesc;
  document.getElementById("numeEsa").value =nMesa;

    alert(nMesa);
  alert("asas");
<div class="content">
              <div class="content-text">Para evitar errores, deberá <b>confirmar</b> la mesa seleccionada.
  <p class="p-confirm" id="p-confirm"></p>
                  <div class="content-buttons">
                      <button class="close_window" id="close-button" onclick="continuar()" ;> Continuar</button>
                      <button id="btn-confir" onclick="confirmar()">Confirmar</button>
                      <button class="btn-regresar" onclick="regresar()">Regresar</button>
                  </div>
              </div>
  
          </div> function showTime(){
}*/
function showTime() {
  myDate = new Date();
  hours = myDate.getHours();
  minutes = myDate.getMinutes();
  seconds = myDate.getSeconds();
  if (hours < 10) hours = 0 + hours;
  if (minutes < 10) minutes = "0" + minutes;
  if (seconds < 10) seconds = "0" + seconds;
  let HoraActual = hours + ":" + minutes + ":" + seconds
  //$("#HoraActual").text(hours+ ":" +minutes+ ":" +seconds);
  //setTimeout("showTime()", 1000);
  //console.log(HoraActual +"\nds   " +hours+ ":" +minutes+ ":" +seconds);
  document.getElementById("resul").textContent = "| " + hours + ":" + minutes + ":" + seconds;

  //===
  // INIT
  //===
  //updateCountdown();
  // Refresh every second
  setInterval(updateCountdown, seconds);
}
//document.getElementById("section2").style.display="block";
function mostrar() {    
  //Muestra u oculta el de circuitos y candidatos
  var estado =document.getElementById("oculto").style.display;
  if(estado=="none"){
      document.getElementById("oculto").style.display="inline";
  }else{
      document.getElementById("oculto").style.display="none";        
  }    
}