<?php
    include("connection.php");
    $con = connection();
//suma las columnas de la base de datos:
function getTable($lectura)
{
    global $con;
    // $sql = ;
    $sql1 = "SELECT SUM(pres_1) AS tpd1 , SUM(pres_2) AS tpd2, SUM(cantivo) AS tvot, SUM(vtnul) AS tnul, SUM(vtrec) AS trec, SUM(vtimp) AS timp, SUM(vtcom) AS tcom, SUM(vtbla) AS tbla FROM `votos`";
    //$sql2= "SELECT `parti2`, SUM(pres_2) AS totalpd ,SUM(parlan_2) AS totalpn FROM `votos`";
    $ejecutar = mysqli_query($con, $sql1);
    //$query1 = mysqli_query($con,$sql2); 
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

        $lines .= '
            <input type="hidden" id="e-tvot" value=' . $row['tvot'] . '> </input>
            <input type="hidden" id="e-tpd1" value=' . $row['tpd1'] . '> </input>
            <input type="hidden" id="e-tpd2" value=' . $row['tpd2'] . '> </input>
            <input type="hidden" id="e-tnul" value=' . $row['tnul'] . '> </input>
            <input type="hidden" id="e-trec" value=' . $row['trec'] . '> </input>
            <input type="hidden" id="e-timp" value=' . $row['timp'] . '> </input>
            <input type="hidden" id="e-tcom" value=' . $row['tcom'] . '> </input>
            <input type="hidden" id="e-tbla" value=' . $row['tbla'] . '> </input>            
            ';
    }

    return $lines;
}

$data1 = getTable('lectura');
$lines = iterateDataToTable($data1);

//c0
function reci0($lecir0)
{
    global $con;
    $sql0= "SELECT SUM(pres_1) AS t1c0, SUM(pres_2) AS t2c0, SUM(cantivo) AS tvc0, SUM(vtnul) AS tnc0, SUM(vtrec) AS trc0, SUM(vtimp) AS tic0, SUM(vtcom) AS tcc0, SUM(vtbla) AS tbc0 FROM `votos` WHERE `circuito`=17";
    $ejecutar = mysqli_query($con, $sql0);
  
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
function reco0($data0)
{
    $lines = '';
    while ($row = mysqli_fetch_array($data0)) {

        $lines .= '
            <input type="hidden" id="e0-tvot" value=' . $row['tvc0'] . '> </input>
            <input type="hidden" id="e0-tpd1" value=' . $row['t1c0'] . '> </input>
            <input type="hidden" id="e0-tpd2" value=' . $row['t2c0'] . '> </input>
            <input type="hidden" id="e0-tnul" value=' . $row['tnc0'] . '> </input>
            <input type="hidden" id="e0-trec" value=' . $row['trc0'] . '> </input>
            <input type="hidden" id="e0-timp" value=' . $row['tic0'] . '> </input>
            <input type="hidden" id="e0-tcom" value=' . $row['tcc0'] . '> </input>
            <input type="hidden" id="e0-tbla" value=' . $row['tbc0'] . '> </input>            
            ';
    }

    return $lines;
}

$data0 = getTable('lecir0');
$lines = iterateDataToTable($data0);

//c1
function reci1($lecir1)
{
    global $con;
    
    $sql1= "SELECT SUM(pres_1) AS t1c1, SUM(pres_2) AS t2c1, SUM(cantivo) AS tvc1, SUM(vtnul) AS tnc1, SUM(vtrec) AS trc1, SUM(vtimp) AS tic1, SUM(vtcom) AS tcc1, SUM(vtbla) AS tbc1 FROM `votos` WHERE `circuito`=18";
    $sql4= "SELECT SUM(pres_1) AS t1c2, SUM(pres_2) AS t2c2, SUM(cantivo) AS tvc2, SUM(vtnul) AS tnc2, SUM(vtrec) AS trc2, SUM(vtimp) AS tic2, SUM(vtcom) AS tcc2, SUM(vtbla) AS tbc2 FROM `votos` WHERE `circuito`=19";
    $sql5= "SELECT SUM(pres_1) AS t1c3, SUM(pres_2) AS t2c3, SUM(cantivo) AS tvc3, SUM(vtnul) AS tnc3, SUM(vtrec) AS trc3, SUM(vtimp) AS tic3, SUM(vtcom) AS tcc3, SUM(vtbla) AS tbc3 FROM `votos` WHERE `circuito`=20";
    $sql6= "SELECT SUM(pres_1) AS t1c4, SUM(pres_2) AS t2c4, SUM(cantivo) AS tvc4, SUM(vtnul) AS tnc4, SUM(vtrec) AS trc4, SUM(vtimp) AS tic4, SUM(vtcom) AS tcc4, SUM(vtbla) AS tbc4 FROM `votos` WHERE `circuito`=21";
    $sql7= "SELECT SUM(pres_1) AS t1c5, SUM(pres_2) AS t2c5, SUM(cantivo) AS tvc5, SUM(vtnul) AS tnc5, SUM(vtrec) AS trc5, SUM(vtimp) AS tic5, SUM(vtcom) AS tcc5, SUM(vtbla) AS tbc5 FROM `votos` WHERE `circuito`=22";
    
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
function reco1($data1)
{
    $lines = '';
    while ($row = mysqli_fetch_array($data1)) {

        $lines .= '
            <input type="hidden" id="e1-tvot" value=' . $row['tvc1'] . '> </input>
            <input type="hidden" id="e1-tpd1" value=' . $row['t1c1'] . '> </input>
            <input type="hidden" id="e1-tpd2" value=' . $row['t2c1'] . '> </input>
            <input type="hidden" id="e1-tnul" value=' . $row['tnc1'] . '> </input>
            <input type="hidden" id="e1-trec" value=' . $row['trc1'] . '> </input>
            <input type="hidden" id="e1-timp" value=' . $row['tic1'] . '> </input>
            <input type="hidden" id="e1-tcom" value=' . $row['tcc1'] . '> </input>
            <input type="hidden" id="e1-tbla" value=' . $row['tbc1'] . '> </input>            
            ';
    }

    return $lines;
}

$data1 = getTable('lecir1');
$lines = iterateDataToTable($data1);
?>


