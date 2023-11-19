<?php
function connection(){
    $host = "localhost";
    $user = "yiyi";
    $pass = "balo1";

    $bd = "balo";

    $connect=mysqli_connect($host, $user, $pass,$bd)or die("Problemas al Conectar");

    mysqli_select_db($connect, $bd)or die("problemas en conecction");
    return $connect;
    
    /*if(!$connect){
        die("Conexion fallida: ".mysqli_connect_error());
    }else{
        echo "Conexion exitosa";
    mysqli_close($connect);}*/
}
?>
<?php
function connection(){
    $host = "localhost";
    $user = "yiyi";
    $pass = "balo1";

    $bd = "balo";

    $connect=mysqli_connect($host, $user, $pass,$bd)or die("Problemas al Conectar");

    mysqli_select_db($connect, $bd)or die("problemas en conecction");
    return $connect;
    
    /*if(!$connect){
        die("Conexion fallida: ".mysqli_connect_error());
    }else{
        echo "Conexion exitosa";
    mysqli_close($connect);}*/
}
?>