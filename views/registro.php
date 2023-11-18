<?php
include("connection.php");
$con = connection();

$seccion = $_POST['seccion'];
$circuito = $_POST['circuito'];
$numesc = $_POST['numesc'];
$nomesc = $_POST['nomesc'];
$num_esa = $_POST['numesa'];
$cantiso = $_POST['cant_sob'];
$cantivo = $_POST['cant_vot'];

$pres_1 = $_POST['presidente_1'];
$pres_2 = $_POST['presidente_2'];

$vtnul = $_POST['vtnul'];
$vtrec = $_POST['vtrec'];
$vtimp = $_POST['vtimp'];
$vtcom = $_POST['vtcom'];
$vtbla = $_POST['vtbla'];


$sql = "INSERT INTO votos VALUES('$seccion','$circuito','$numesc','$nomesc','$num_esa','$cantiso','$cantivo','$pres_1','$pres_2','$vtnul','$vtrec','$vtimp','$vtcom','$vtbla')";
//$sql1 = "INSERT INTO  VALUES('$numesa','$numlis1','$parti1','$pres_1','$parlan_1','$dip_1','$parlar_1','$numlis2','$parti2','$pres_2','$parlan_2','$numlis3','$parti3','$pres_3','$parlan_3','$dip_3','$parlar_3','$numlis4','$parti4','$pres_4','$parlan_4','$dip_4','$parlar_4','$numlis5','$parti5','$pres_5','$parlan_5')";

$ejecutar=mysqli_query($con,$sql);
//$query1 = mysqli_query($con,$sql1); 


if(!$ejecutar){
 
    printf("Errormessage: %s\n", mysqli_error($con));
    echo '<script language="javascript">alert("Hubo algun error. \nHaga clic en Aceptar, espere un minuto y vuelva a GUARDAR.");</script>';
    //echo"Hubo Algun Error";
   }else{ 
    echo '<script language="javascript">alert("Ingreso correcto. \nHaga clic en Aceptar.");</script>';
    echo '<script language="javascript">window.history.back();</script>';
    echo '<script language="javascript">window.history.back();</script>';
    
  }
 
?>