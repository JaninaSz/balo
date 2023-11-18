<?php

//suma las columnas de la base de datos:
function getTable($lectura)
{
    include("connection.php");
    $con = connection();
    $sql1 = "SELECT SUM(pres_1) AS tpd1 ,SUM(parlan_1) AS tpn1, SUM(dip_1) AS tdp1, SUM(parlar_1) AS tpr1, `parti2`, SUM(pres_2) AS tpd2 ,SUM(parlan_2) AS tpn2,`parti3`, SUM(pres_3) AS tpd3 ,SUM(parlan_3) AS tpn3, SUM(dip_3) AS tdp3, SUM(parlar_3) AS tpr3, `parti4`, SUM(pres_4) AS tpd4 ,SUM(parlan_4) AS tpn4, SUM(dip_4) AS tdp4, SUM(parlar_4) AS tpr4, `parti5`, SUM(pres_5) AS tpd5 ,SUM(parlan_5) AS tpn5 FROM `votos`";
    //$sql2= "SELECT `parti2`, SUM(pres_2) AS totalpd ,SUM(parlan_2) AS totalpn FROM `votos`";
    $ejecutar = mysqli_query($con, $sql1);
    return $ejecutar;
    if (!$ejecutar) {
        printf("Errormessage: %s\n", mysqli_error($con));
        //echo"Hubo Algun Error";
    } else {
        // echo '<script language="javascript">alert("Ingreso correcto. Haga clic en Regresar.");</script>';
        // echo '<script language="javascript">window.history.back();</script>';

    }
}

//recorre los registros para mostrarlos
function iterateDataToTable($data1)
{
    $lines = '';
    //$sum.="SELECT `partido1`, SUM(pres_1) AS total FROM `part1`";
    while ($row = mysqli_fetch_array($data1)) {

        $lines .=
            '
            
            <input type="hidden" id="e-tpd1" value=' . $row['tpd1'] . '> </input>
            <input type="hidden" id="e-tpn1" value=' . $row['tpn1'] . '> </input>
            <input type="hidden" id="e-tdp1" value=' . $row['tdp1'] . '> </input>
            <input type="hidden" id="e-tpr1" value=' . $row['tpr1'] . '> </input>

            <input type="hidden" id="e-parti2" value=' . $row['parti2'] . '> </input>
            <input type="hidden" id="e-tpd2" value=' . $row['tpd2'] . '> </input>
            <input type="hidden" id="e-tpn2" value=' . $row['tpn2'] . '> </input>

            <input type="hidden" id="e-parti3" value=' . $row['parti3'] . '> </input>
            <input type="hidden" id="e-tpd3" value=' . $row['tpd3'] . '> </input>
            <input type="hidden" id="e-tpn3" value=' . $row['tpn3'] . '> </input>
            <input type="hidden" id="e-tdp3" value=' . $row['tdp3'] . '> </input>
            <input type="hidden" id="e-tpr3" value=' . $row['tpr3'] . '> </input>

            <input type="hidden" id="e-parti4" value=' . $row['parti4'] . '> </input>
            <input type="hidden" id="e-tpd4" value=' . $row['tpd4'] . '> </input>
            <input type="hidden" id="e-tpn4" value=' . $row['tpn4'] . '> </input>
            <input type="hidden" id="e-tdp4" value=' . $row['tdp4'] . '> </input>
            <input type="hidden" id="e-tpr4" value=' . $row['tpr4'] . '> </input>

            <input type="hidden" id="e-parti5" value=' . $row['parti5'] . '> </input>
            <input type="hidden" id="e-tpd5" value=' . $row['tpd5'] . '> </input>
            <input type="hidden" id="e-tpn5" value=' . $row['tpn5'] . '> </input>
        ';
    }

    return $lines;
}

$data1 = getTable('lectura');
$lines = iterateDataToTable($data1);

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/generales.css">
    <link rel="stylesheet" href="../styles/res-part.css">
    <style data-styled="active" data-styled-version="5.3.11"></style>
    <script src="../scripts/resul-part.js"></script>
    <title>generales</title>
</head>

<body onload=respart()>
    <h3> Resultados por partido</h3>
    <div>
    <?php
        //muestra los resultados de la consulta
        echo $lines;
        ?>
    </div>
    <main>
        <br><!-- sin tabla -->
        <div class="cont-parla">
            <div class="cont-todos">
                <p class="pf-part">Partidos</p>
                <p>  |  </p>
                <p class="pf-encab">Presidente - Vicepresidente</p>
                <p class="pf-encab">Parl. Merc. Nacionales</p>
                <p class="pf-encab">Diputados Nacionales</p>
                <p class="pf-encab">Parl. Merc. Regionales</p>
            </div>
        </div>
            <div class="cont-task3">
                    <img class="log-part" src="../assets/logos/000132.png" alt="logo_agrupacion">

                    <p class="sp-votos"><b><span id="tpd-1"></b></span></p>
                    <p class="sp-votos"><span class="tpn-1" id="tpn-1"></span></p>
                    <p class="sp-votos"><span class="tpd-1" id="tdp-1"></span></p>
                    <p class="sp-votos"><span class="tpr-1" id="tpr-1"></span></p>
            </div>
                <hr>
            <div class="cont-task1">
                <img class="log-part" src="../assets/logos/000133.png" alt="logo_agrupacion">
                <p><b> <span class="sp-votos" id="tpd-2"></b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-2"></span></p>
                <div class="sp-gris"><p> <span ></span></p></div>
                <div class="sp-gris"><p> <span ></span></p></div>
            </div>
            <hr>
            <div class="cont-task2">
                <img class="log-part" src="../assets/logos/000134.png" alt="logo_agrupacion">

                <p class="sp-votos"><b> <span id="tpd-3"></b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-3"></span></p>
                <p class="sp-votos"><span class="tpd-1" id="tdp-3"></span></p>
                <p class="sp-votos"><span class="tpr-1" id="tpr-3"></span></p>
            </div>
            <hr>
            <div class="cont-task4">
                <img class="log-part" src="../assets/logos/000135.png" alt="logo_agrupacion">
                <p><b> <span class="sp-votos" id="tpd-4"></b></span></p>
                <p class="sp-votos"><span class="tpn-1" id="tpn-4"></span></p>
                <p class="sp-votos"><span class="tpd-1" id="tdp-4"></span></p>
                <p class="sp-votos"><span class="tpr-1" id="tpr-4"></span></p>
            </div>
            <hr>
            <div class="cont-task5">
                <img class="log-part" src="../assets/logos/000136.png" alt="logo_agrupacion">
                <p class="sp-votos"><b> <span id="tpd-5"></b></span></p>
                <p class="sp-votos"><span class="tpn-5" id="tpn-5"></span></p>
                <div class="sp-gris"><p> <span></span></p></div>
                <div class="sp-gris"><p> <span></span></p></div>
            </div>
        
        
    </main>
</body>

</html>