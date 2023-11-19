<?php
 
//suma las columnas de la base de datos:
function getTable($registro){
    include("connection.php");
    $con = connection();
    
    $sql= "SELECT COUNT(*) as cantReg,SUM(cantivo) AS tvot, SUM(vtnul) AS tnul ,SUM(vtrec) AS trec,SUM(vtimp) AS timp,SUM(vtcom) AS tcom,SUM(vtbla) AS tbla FROM `votos`";
   
    return mysqli_query($con,$sql);
    //registro: SELECT `circuito`, SUM(`nulpd`) AS nulopd, SUM(`recpd`) AS recupd, SUM(`imppd`) AS impupd, SUM(`compd`) AS comapd, SUM(`blapd`) AS blanpd, SUM(`totpd`) AS totapd FROM `registro` 
}
/*
function cantireg($cantreg){
   
    $conn = connection();
    $cantregistros=0;

    $sql1= "SELECT COUNT(*) as cantReg FROM `registro`";
    return mysqli_query($conn,$sql1);

}*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/balo/styles/head.css">
    <link rel="stylesheet" href="/balo/styles/main.css">    
    <link rel="stylesheet" href="/balo/styles/media.css">
    <link rel="stylesheet" href="/balo/styles/generales.css" >
    <script src="/balo/scripts/index.js"></script>
    <style data-styled="active" data-styled-version="5.3.11"></style>
    <title>Estadis</title>
</head>

<body>
    <!--div class="dv-load" onclick="actualizar()" display="none" style="background-color: tomato;"> 
        <img class="load" src="../assets/img/loading.gif" alt="cargando">
    </div-->   
    <?php
//recorre las columnas de la base de datos:
function iterateDataToTable($data1){
    $lines='';
    while($row = mysqli_fetch_array($data1)) {
    
       $lines.= '
        <input type="hidden" id="e-tvot" value=' . $row['tvot'] . '> </input>
        <input type="hidden" id="e-tnul" value=' . $row['tnul'] . '> </input>
        <input type="hidden" id="e-trec" value=' . $row['trec'] . '> </input>
        <input type="hidden" id="e-timp" value=' . $row['timp'] . '> </input>
        <input type="hidden" id="e-tcom" value=' . $row['tcom'] . '> </input>
        <input type="hidden" id="e-tbla" value=' . $row['tbla'] . '> </input>
        <input type="hidden" id="e-cantReg" value=' . $row['cantReg'] . '> </input>
        ';
    }
    
    return $lines;
    
}

$data1=getTable('registro');
$lines=iterateDataToTable($data1);
echo $lines;
/*
function leerdatos($cantregistros){
    $registrados='';
    while($row = mysqli_fetch_array($cantregistros)) {
    
        $registrados.= '
            <input id="e-cantReg" value=' . $row['cantReg'] . '> </input>
        ';
    }
    
    return $registrados;
    
}

$cantregistros=getTable('cantreg');
$registrados=leerdatos($cantregistros);
echo $registrados;*/
?>
  <header>
  <div class="columns">
    <div class="dv-frencur" >
    <span onclick="showTime()"> 
        <img class="logo" src="../assets/logos/up-10cur.png" alt="frencur"  width="110" height="130">
        <span > <p class="parrafototal"><b></b></p> </span>
    </span>
    </div>
    <div class="dv-estadisticas">
    <div class="tabll">
        <p><img class="icono" src='../assets/img/blanco.png' class='i'><b> Blancos: </b><span id="por-bla"> </span>&nbsp;</p>        
        <p><img class="icono" src='../assets/img/anulados.png' class='i'><b> Anulados: </b><span id="por-anu"> </span>&nbsp;</p>
        <p><img class="icono" src='../assets/img/participacion.png' class='i' onclick="actualizar()" > <b>&nbsp;Participación:</b><span id="por-par"> </span>&nbsp;%</p>
        <!--table width='100%'>
        <tr>
            
            <td class='aj'><img src='../assets/img/blanco.png' class='i'></td>
            <td class='aj'><b>Blancos:</b><span class="por-bla"> 8</span>&nbsp;%</td>
            <td class='aj'><img src='../assets/img/anulados.png' class='i'></td>
            <td class='aj'><b>Anulados:</b><span class="por-anu"> 1,2</span>&nbsp;%</td>
            <td class='aj'><img src='../assets/img/participacion.png' class='i'></td>
            <td class='aj'><b>&nbsp;Participación:</b><span class="por-anu"> 69,6</span>&nbsp;%</td>
        </tr>
    </table--></div> 
<hr><div>
    <table width='100%'>
        <tr>
            <td colspan="3"> </td><td colspan="3"><b>Votos:</b>&nbsp;<span id="tolvo"> </span> | <b>Escrutado:</b>&nbsp; <span id="escrut"> </span> mesas |
                <b>Actualizado:</b>&nbsp;<large>16/11/2023 <span id="resul"> </span></large> </td>
        </tr>
    </table>
    
</div>
<span ><p class="parrafototal">Electores: <b>34.064</b></p> </span>
</div>
</div>
</header>
  <!--button onclick="showTime()">Hora actual</button>
        <p id="resul"><b></b></p-->
<script src="/balo/scripts/resul.js"></script>
<script src="/balo/scripts/calcirc.js"></script>
</body>
</html>