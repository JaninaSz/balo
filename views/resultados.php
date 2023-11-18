<?php
//suma las columnas de la base de datos:
function getTable($registro){
    include("connection.php");
    $con = connection();

    $sql= "SELECT SUM(nulpd) AS tnpd ,SUM(recpd) AS trpd,SUM(imppd) AS tipd,SUM(compd) AS tcpd,SUM(blapd) AS tbpd,SUM(totpd) AS ttpd FROM `registro`";
    return mysqli_query($con,$sql);
    //registro: SELECT `circuito`, SUM(`nulpd`) AS nulopd, SUM(`recpd`) AS recupd, SUM(`imppd`) AS impupd, SUM(`compd`) AS comapd, SUM(`blapd`) AS blanpd, SUM(`totpd`) AS totapd FROM `registro` 
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../styles/resultados.css">
    <link rel="stylesheet" href="../styles/head.css">
    <script src="../scripts/index.js"></script>
    <script src="../scripts/resul.js"></script>
    
    <title>Resultados</title>
</head>

<body>
    <!--<span><input type="datetime-local"></span>
    <input type="time" name="hora" value="11:45:00" max="22:30:00" min="10:00:00" step="1">-->
    <span class="time">
        <p>Fecha y hora </p>
        <div id="current_date">

            <script>
                //document.getElementById("current_date").innerHTML = Date();
                // create a new `Date` object
                var today = new Date();

                // get the date and time
                var now = ':  ' + today.toLocaleString();
                document.getElementById("current_date").innerHTML = (now);
            </script>
        </div>
    </span>

    <nav class="navbar-topNav">
        <div class="cont-title">
            <div class="navbar-brand">

                <div class="dv-link">
                    <span><a href="../index.html"><img src="../assets/img/icon.png" alt="logo Frente Renovador" width="120"
                                height="120">
                    <p><b>Frente Renovador</b></p></a></span>
                </div>

                <h1>Resultados</h1>
                <span class="navbarEnd">Cerrar sesión
                    
                <h3 id="HoraActual">  </h3>
              
                </span>
            </div>

        </div>
    </nav>

    <nav class="navbar">

        <div class="cont-menu">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="escuelas.html" >Escuelas </a>
                    <a class="navbar-item" href="mesas.html">Control de mesas</a>
                    <a class="navbar-item" href="" >Registro</a>
                    <a class="navbar-item" href="resultados.php">Resultados</a>
                </div>

            </div>
        </div>
    </nav>
<!--input type="number" value="<?= $row['seccion']?>"-->

     <!--button onclick="showTime()">Hora actual</button>
        <p id="resul"><b></b></p-->
    <div class="sct-body">
        <div class="columns">
            
            <div class="column-is-13">
            <h3><b>  </b></h3>
                <div class="acordeon-invisible">
                <div class="box-content">
                    <div class="form-group">
                        <h3>Seleccione una categoría</h3>
                        <p></p>
                        <div class="accordion">
                            <div onload="mostrar()" class="section1">
                                <input type="checkbox" id="section1" class="accordion__input">
                                <label for="section1" class="accordion__label">Escuelas</label>
                                <div class="accordion__content">
                                   
                                    
                                    
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" id="section2" class="accordion__input">
                                <label for="section2" class="accordion__label">Candidatos</label>
                                <div class="accordion__content">
                                    <ol>

                                        <li><a link href="president.php" target="ifr-escuela"> Presidente</a></li>
                                        
                                        
                                    </ol>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" id="section3" class="accordion__input">
                                <label for="section3" class="accordion__label">Estadísticas</label>
                                <div class="accordion__content">
                                    <ol>
                                        <li><a link href="estadi.html" target="ifr-escuela"> Participación</a></li>
                                        <li><a link href="res_part.php" target="ifr-escuela"> Resultados por partido</a></li>
                                        <li><a link href=" ">Resultados por </a></li>
                                    </ol>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" id="section4" class="accordion__input">
                                <label for="section4" class="accordion__label">Género</label>
                                <div class="accordion__content">
                                    <li><a link href=" ">Votos femeninos</a></li>
                                    <li><a link href=" ">Votos masculinos </a></li>
                                    <li><a link href=" ">Porcentaje jóven</a></li>
                                    <li><a link href=" ">Porcentaje adultos </a></li>
                                    <li><a link href=" ">Porcentaje mayores </a></li>
                                    <p>

                                        Se verán los resultados, luego de cargar el padrón.
                                    </p>
                                </div>
                            </div>
                            <p class="invisible">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        </article>
                    </div>
                </div>
                <div class="dv-invisibli">
                    <p> </p>
                    <br><br><br><br>
                    <br><br><br><br>
                </div>
            </div>
            
            </div>

            <div class="cont-ifr">
                
                <!--El iframe deberia estar hidden, solo ser visible al hacer clic en una Escuela y cargar la correspondiente-->
                        
                <iframe class="ifr-escu" name="ifr-estadi" src="../views/fijoEstad.php" width="800" height="150"></iframe>
                <iframe class="ifr-escuela" name="ifr-escuela" src="../assets/img/FR-C-25p.png"></iframe>
            </div>

            

        </div>
        <a link href="president.php" target="ifr-escuela">P</a>
    </div>
    <button>Consultar</button>
    <footer>
        <div class="cont-footer">
            <div class="col-12 color10 text-center">
                <h2 style="text-align:center"><strong>Gisela Yiyi S&aacute;nchez | Todos los derechos
                        reservados</strong></h2>
                <h2 style="text-align:center">3774-455436</h2>
            </div>
        </div>
    </footer>
    <script src="../scripts/resul.js"></script>
    <script>
        startday = new Date(); clockStart = startday.getTime();
        function initStopwatch() {
            var myTime = new Date();
            return ((myTime.getTime() - clockStart) / 1000);
        }
        function getSecs() {
            var tSecs = Math.round(initStopwatch());
            var iSecs = tSecs % 60; var iMins = Math.round((tSecs - 30) / 60);
            var sSecs = "" + ((iSecs > 9) ? iSecs : "0" + iSecs);
            var sMins = "" + ((iMins > 9) ? iMins : "0" + iMins);
            document.getElementById('timespent').value = sMins + ":" + sSecs;
            window.setTimeout('getSecs()', 1000);
        }
        window.onload = function () {
            window.setTimeout('getSecs()', 1);
        }
    </script>
    
</body>

</html>