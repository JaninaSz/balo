<?php
echo '<link href="../styles/generales.css" type="text/css" rel="stylesheet">';
//suma las columnas de la base de datos:
function getTable($lectura)
{
  include("connection.php");
  $con = connection();

  $sql = "SELECT SUM(pres_1) AS tpd1, SUM(pres_2) AS tpd2 FROM `votos`";
  //"SELECT parti1,parti2,parti3,parti4,parti5, SUM(pres_1) AS tpd1, SUM(pres_2) AS tpd2, SUM(pres_3) AS tpd3, SUM(pres_4) AS tpd4, SUM(pres_5) AS tpd5 FROM `votos`";
  return mysqli_query($con, $sql);
  //registro: SELECT `circuito`, SUM(`nulpd`) AS nulopd, SUM(`recpd`) AS recupd, SUM(`imppd`) AS impupd, SUM(`compd`) AS comapd, SUM(`blapd`) AS blanpd, SUM(`totpd`) AS totapd FROM `registro` 
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../styles/generales.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles/res-pres.css">
  <link rel="stylesheet" href="../styles/main.cssc">
  <link rel="stylesheet" href="/balo/styles/media.css">
  <style type="text/css">.oculto {display: none;}.visible {display: inline;}</style>
  <style data-styled="active" data-styled-version="5.3.11"></style>
  <script src="../scripts/index.js"></script>
  <script src="../scripts/resul-pres.js"></script>
  <title>generales</title>
</head>


<body onload=porcentajes()>
  <?php
    //recorre las columnas de la base de datos:
    function iterateDataToTable($data1)
    {
      $lines = '';
      while ($row = mysqli_fetch_array($data1)) {
  
        $lines .= '        
        <input type="hidden" id="e-tpd1" value=' . $row['tpd1'] . '> </input>        
        <input type="hidden" id="e-tpd2" value=' . $row['tpd2'] . '> </input>
        ';
        
      }
  
      return $lines;
    }
  
    $data1 = getTable('lectura');
    $lines = iterateDataToTable($data1);
    echo $lines;
    ?>  
     <!--
  <div class="dv-main" onload="mostrar()">
    <div class="st-title" onclick="mostrar()">
      <span class="sp-plus">
        <img class="h-12-w-12 " src="../assets/logos/000134.png" alt="logo_agrupacion" width="95" height="95">
        
      </span>
      <div class="oculto" id="oculto">
          <img class="img-candi" src="../assets/logos/foto01003005.png" alt="foto-perfil"><br>
          <p class="prf-name">MASSA - ROSSI</p>
          <hr>
          <p class="sp-votos"><span>5.070.104</span> votos</p>
        </div>
      </div>
    </div>-->
    <br>
    <h4>Balotaje - 19 de noviembre de 2023</h4><hr>
    <h3>Presidente - Vicepresidente</h3>
    <br>
      <div class="cont-parla">
      <p> </p>
      <!--tercero-->
      
      <div class="accordion3">
          <div onload="mostrar()" class="section3">
            <input type="checkbox" id="section3" class="accordion__input">
            <div class="accordion__label">

              <img class="h-12-w-12xx" src="../assets/logos/000134.png" alt="logo_agrupacion">
              <label for="section3" class="accordion__label">UNION POR LA PATRIA</label>
            </div><br>
            <p class="sp-votos"><span class="tpd-3" id="p-porPd1"> </span> %</p>
            <div class="accordion__content" id="oculto">

              <img class="img-candi" src="../assets/logos/foto01003005.png" alt="foto-perfil">
              <br>
              <br><p class="prf-name">MASSA - ROSSI</p><hr>
              <p><b><span class="sp-votos" id="tpd-1"></b></span>  votos</p>
            </div>
          </div>
      </div>
              
      <!--cuarto-->
      <div class="accordion4">
          <div onload="mostrar()" class="section4">
            <input type="checkbox" id="section4" class="accordion__input">
            <div class="accordion__label">
              <img class="h-12-w-12xx " src="../assets/logos/000135.png" alt="logo_agrupacion">
              <label for="section4" class="accordion__label">LA LIBERTAD AVANZA</label>
            </div><br>
            <p class="sp-votos"><span class="tpd-2" id="p-porPd2"> </span> %</p>

            <div class="accordion__content" id="oculto">
              <img class="img-candi" src="../assets/logos/foto01003016.png" alt="foto-perfil">
              <br><p class="prf-name">MILEI - VILLARRUEL</p><hr>
              <p><b><span class="sp-votos" id="tpd-2"></b></span> votos</p>
            </div>
          </div>
      </div>
      <p> </p>
    </div>

  <script src="../scripts/resul-pres.js"></script>
</body>
</html>