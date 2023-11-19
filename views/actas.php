<?php
include("connection.php");
$con = connection();

?>
<!DOCTYPE html>
<html lang="es">

<!--head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="../assets/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../styles/actas.css">
    <link rel="stylesheet" href="../styles/head.css">
    <script src="../scripts/actas.js"></script>
    <script src="../scripts/index.js"></script>
    <title>Mesa x</title>
</head-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"-->
    <link rel="shortcut icon" href="../assets/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/head.css">
    <link rel="stylesheet" href="../styles/main.css">    
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="../styles/actas.css">
    <script src="../scripts/actas.js"></script>
    <!--script src="../scripts/index.js"> alert("ir al index;")</script-->
    <title>Mesa x </title>
</head>
<body onload="ocultar()">

    <span class="time">
        <p>Hora: </p>
        <div id="current_date">
            <script>
                // create a new `Date` object
                var today = new Date();

                // get the date and time
                var now = '  ' + today.toLocaleString();
                document.getElementById("current_date").innerHTML = (now);
               // document.getElementById("current_date").innerHTML = Date();
            </script>
        </div>
    </span>
    <nav class="navbar-topNav">
        <div class="cont-title">
            <div class="navbar-brand">
                <div class="dv-link">
                    <span><a href="../index.html"><img src="../assets/logos/up-10cur.png" alt="logo Frente Renovador" width="100"
                                height="120">
                    <p><b></b></p></a></span>
                </div>
                <div>
                    <h1>Registro acta de escrutinio</h1>                   
                </div>
                <span class="navbarEnd">Cerrar sesión</span>
            </div>
        </div>
    </nav>    

    <nav class="navbar">
        <div class="cont-menu">
            <div class="men-prin">
                <div class="navbar-start">
                    <a class="navbar-item" href="../views/escuelas.html">Escuelas </a>
                    <a class="navbar-item" href="../views/mesas.html">Control de mesas</a>
                    <a class="navbar-item" href="">Registro</a>
                    <a class="navbar-item" href="../views/resultados.html">Resultados</a>
                </div>

            </div>
        </div>
    </nav>

    <div class="window-notice" id="window-notice">
        <div class="content">
            <div id="contentText">
                <!--<div class="content-text">Para evitar errores, deberá <b>confirmar</b> la mesa seleccionada.-->
                <p class="p-confirm" id="p-confirm"></p>
                <div class="content-buttons">
                    <button class="close_window" id="close-button" onclick="continuar()" ;> Continuar</button>
                    <button id="btn-confir" onclick="confirmar()">Confirmar</button>
                    <button class="btn-regresar" onclick="regresar()">Regresar</button>
                </div>
            </div>

        </div>
    </div>
    <!--<div><button id="btn-confir" onclick="cargarMesa()" ;> Cargar</button></div-->

    <section class="sct-body">
        <article>
            <h4> </h4>
        </article>
        <div class="columns">
            <div class="columnActa">
                <div class="box content">
                    <div class="form-acta">
                        <div class="cont-regresar">
                            <div class="escudo">
                                <a href="registro.html"><img src="../assets/img/escudo.jpg" width="80" height="110" alt="escudo"></a>
                            </div>
                            <h3>Balotaje - 19 de noviembre de 2023</h3>
                            <button class="btn-regresar" onclick="regresar()">Volver a Escuela</button>
                        </div>

                        <div class="cont-encab">
                            <h4> Distrito Corrientes</h4>
                            <div>
                            
                                <span class="mesa">Mesa N° </span>
                                <span class="lbl-mesa" id="numMesa"> </span>
                                <br>
                                
                            </div>
                        </div>
                        <article>
                            <p></p>
                            <div class="form-encab">
                                <form id="frmActa" action="registro.php" method="POST">
                                
                                    <div>
                                        <span id="seccion">Sección: </span>
                                        <input type="text" name="seccion" value="03">
                                        <span id="circuito">Circuito</span>
                                        <input type="text" name="circuito" value="17">
                                        <input type="hidden" id="nomesc" name="nomesc">
                                        <!--span id="nomesc"></span-->
                                        <input type="hidden" id="numesc" name="numesc" value="0"> 
                                        <input type="hidden" id="numeEsa" name="numesa">
                                        
                                        <span name="cantidad_sobres">Cantidad de sobres:</span>
                                        <input type="number" class="valor-input" id="cantidad_sobres" name="cant_sob" oninput="validity.valid||(value='');" required="">

                                        <label for="cantidad_votaron">Cantidad que votaron:</label>
                                        <input type="number" class="valor-input" id="cantidad_votaron" name="cant_vot" oninput="validity.valid||(value='0');" required="">
                                        <br><div id="verificacion_mensaje"></div>

                                    </div>
                    <div class="cont-tabla"> 
                        <br><hr>
                        <table border="2px" bordercolor="2D9ADE">
                                <tbody>
                                    <!--tr>
                                        <th>N° Lista</th>
                                        <th>Nombre de Partido</th>
                                        <th>Orden</th>
                                        <th>Presidente</th>
                                        <th>Parlasur_Nac</th>
                                        <th>Diputados</th>
                                        <th>Parlasur_Prov</th>
                                        
                                    </tr-->
                                    <tr>
                                        <td align="center"><b><font color="#000000">Lista</font></b></td>
                                        <td align="center"><b><font color="#000000" colspan="4">Agrupación política</font></b></td>
                                        <td align="center" valign="middle"><b><font color="#000000">Presidente-Vice</font></b></td>
                                    </tr>
                                    
                                    <tr>
                                        <td name="134">134</td>
                                        <td align="left" name="UNION" class="nombre-partido">UNION POR LA PATRIA - MASSA</td>
                                        <input type="hidden" name="nombre_partido_3" value="UNION POR LA PATRIA - MASSA">
                                        <td><input type="number" class="valor-input" name="presidente_1" oninput="validity.valid||(value='');" required=""></td>
                    
                                    </tr>
                                    <tr>
                                        <td name="135">135</td>
                                        <td align="left" name="LIBERTAD" class="nombre-partido">LIBERTAD AVANZA - MILEI</td>
                                        <input type="hidden" name="nombre_partido_4" value="LIBERTAD AVANZA - MILEI">
                                        <td><input type="number" class="valor-input" name="presidente_2" oninput="validity.valid||(value='');" required=""></td>
                    
                                    </tr>
                                    
                            </table>

                            <table border="2px" bordercolor="2D9ADE">
                                <tr>
                                    <td colspan="2"></td> 
                                    <td class="vot-cel" rowspan="2" colspan="4">Votos nulos</td>
                                    <td style="width:5px"><input type="text" name="vtnul"><br></td>
                                    <td colspan="2">-</td> 
                                <tr>
                                <tr>
                                    <td colspan="2"></td>                            
                                    <td  class="vot-cel" colspan="4">Votos recurridos</td>
                                    <td style="width:5px"><input type="text" name="vtrec"><br></td>
                                <tr>
                                <tr>
                                    
                                    <td colspan="2"></td>
                                    <td  class="vot-cel" colspan="4">Votos de identidad impugnada</td>
                                
                                    <td style="width:10px"><input type="text" name="vtimp"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="2"></td> 
                                    <td  class="vot-cel" colspan="4">Votos del Comando electoral</td>
                                    <td style="width:10px"><input type="text" name="vtcom"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="2"></td> 
                                    <td  class="vot-cel" colspan="4">Votos en blanco</td>
                                    <td style="width:10px"><input type="text" name="vtbla"><br></td>
                                    <td colspan="2"></td> 
                                <tr>
                                
                            </table>
                        </div>


                        <div class="cont-btn">
                                
                                <!--input type="submit" width="10" align="center" value="Guardar"-->
                                <button type="submit" class="btn-enviar" onclick="regresar()">Guardar</button>
                                <button class="btn-borrar" onclick="resetear()">Borrar todo</button>
                            </div>
                            </form>
                        </div>
                            
                            <div class="cont-regresar">
                                <button class="btn-regresar" onclick="regresar()">Volver a Escuela</button>
                            </div>
                    </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
include("connection.php");
$con = connection();

?>
<!DOCTYPE html>
<html lang="es">

<!--head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="../assets/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../styles/actas.css">
    <link rel="stylesheet" href="../styles/head.css">
    <script src="../scripts/actas.js"></script>
    <script src="../scripts/index.js"></script>
    <title>Mesa x</title>
</head-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"-->
    <link rel="shortcut icon" href="../assets/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/head.css">
    <link rel="stylesheet" href="../styles/main.css">    
    <link rel="stylesheet" href="../styles/media.css">
    <link rel="stylesheet" href="../styles/actas.css">
    <script src="../scripts/actas.js"></script>
    <!--script src="../scripts/index.js"> alert("ir al index;")</script-->
    <title>Mesa x </title>
</head>
<body onload="ocultar()">

    <span class="time">
        <p>Hora: </p>
        <div id="current_date">
            <script>
                // create a new `Date` object
                var today = new Date();

                // get the date and time
                var now = '  ' + today.toLocaleString();
                document.getElementById("current_date").innerHTML = (now);
               // document.getElementById("current_date").innerHTML = Date();
            </script>
        </div>
    </span>
    <nav class="navbar-topNav">
        <div class="cont-title">
            <div class="navbar-brand">
                <div class="dv-link">
                    <span><a href="../index.html"><img src="../assets/logos/up-10cur.png" alt="logo Frente Renovador" width="100"
                                height="120">
                    <p><b></b></p></a></span>
                </div>
                <div>
                    <h1>Registro acta de escrutinio</h1>                   
                </div>
                <span class="navbarEnd">Cerrar sesión</span>
            </div>
        </div>
    </nav>    

    <nav class="navbar">
        <div class="cont-menu">
            <div class="men-prin">
                <div class="navbar-start">
                    <a class="navbar-item" href="../views/escuelas.html">Escuelas </a>
                    <a class="navbar-item" href="../views/mesas.html">Control de mesas</a>
                    <a class="navbar-item" href="">Registro</a>
                    <a class="navbar-item" href="../views/resultados.html">Resultados</a>
                </div>

            </div>
        </div>
    </nav>

    <div class="window-notice" id="window-notice">
        <div class="content">
            <div id="contentText">
                <!--<div class="content-text">Para evitar errores, deberá <b>confirmar</b> la mesa seleccionada.-->
                <p class="p-confirm" id="p-confirm"></p>
                <div class="content-buttons">
                    <button class="close_window" id="close-button" onclick="continuar()" ;> Continuar</button>
                    <button id="btn-confir" onclick="confirmar()">Confirmar</button>
                    <button class="btn-regresar" onclick="regresar()">Regresar</button>
                </div>
            </div>

        </div>
    </div>
    <!--<div><button id="btn-confir" onclick="cargarMesa()" ;> Cargar</button></div-->

    <section class="sct-body">
        <article>
            <h4> </h4>
        </article>
        <div class="columns">
            <div class="columnActa">
                <div class="box content">
                    <div class="form-acta">
                        <div class="cont-regresar">
                            <div class="escudo">
                                <a href="registro.html"><img src="../assets/img/escudo.jpg" width="80" height="110" alt="escudo"></a>
                            </div>
                            <h3>Balotaje - 19 de noviembre de 2023</h3>
                            <button class="btn-regresar" onclick="regresar()">Volver a Escuela</button>
                        </div>

                        <div class="cont-encab">
                            <h4> Distrito Corrientes</h4>
                            <div>
                            
                                <span class="mesa">Mesa N° </span>
                                <span class="lbl-mesa" id="numMesa"> </span>
                                <br>
                                
                            </div>
                        </div>
                        <article>
                            <p></p>
                            <div class="form-encab">
                                <form id="frmActa" action="registro.php" method="POST">
                                
                                    <div>
                                        <span id="seccion">Sección: </span>
                                        <input type="text" name="seccion" value="03">
                                        <span id="circuito">Circuito</span>
                                        <input type="text" name="circuito" value="17">
                                        <input type="hidden" id="nomesc" name="nomesc">
                                        <!--span id="nomesc"></span-->
                                        <input type="hidden" id="numesc" name="numesc" value="0"> 
                                        <input type="hidden" id="numeEsa" name="numesa">
                                        
                                        <span name="cantidad_sobres">Cantidad de sobres:</span>
                                        <input type="number" class="valor-input" id="cantidad_sobres" name="cant_sob" oninput="validity.valid||(value='');" required="">

                                        <label for="cantidad_votaron">Cantidad que votaron:</label>
                                        <input type="number" class="valor-input" id="cantidad_votaron" name="cant_vot" oninput="validity.valid||(value='0');" required="">
                                        <br><div id="verificacion_mensaje"></div>

                                    </div>
                    <div class="cont-tabla"> 
                        <br><hr>
                        <table border="2px" bordercolor="2D9ADE">
                                <tbody>
                                    <!--tr>
                                        <th>N° Lista</th>
                                        <th>Nombre de Partido</th>
                                        <th>Orden</th>
                                        <th>Presidente</th>
                                        <th>Parlasur_Nac</th>
                                        <th>Diputados</th>
                                        <th>Parlasur_Prov</th>
                                        
                                    </tr-->
                                    <tr>
                                        <td align="center"><b><font color="#000000">Lista</font></b></td>
                                        <td align="center"><b><font color="#000000" colspan="4">Agrupación política</font></b></td>
                                        <td align="center" valign="middle"><b><font color="#000000">Presidente-Vice</font></b></td>
                                    </tr>
                                    
                                    <tr>
                                        <td name="134">134</td>
                                        <td align="left" name="UNION" class="nombre-partido">UNION POR LA PATRIA - MASSA</td>
                                        <input type="hidden" name="nombre_partido_3" value="UNION POR LA PATRIA - MASSA">
                                        <td><input type="number" class="valor-input" name="presidente_1" oninput="validity.valid||(value='');" required=""></td>
                    
                                    </tr>
                                    <tr>
                                        <td name="135">135</td>
                                        <td align="left" name="LIBERTAD" class="nombre-partido">LIBERTAD AVANZA - MILEI</td>
                                        <input type="hidden" name="nombre_partido_4" value="LIBERTAD AVANZA - MILEI">
                                        <td><input type="number" class="valor-input" name="presidente_2" oninput="validity.valid||(value='');" required=""></td>
                    
                                    </tr>
                                    
                            </table>

                            <table border="2px" bordercolor="2D9ADE">
                                <tr>
                                    <td colspan="2"></td> 
                                    <td class="vot-cel" rowspan="2" colspan="4">Votos nulos</td>
                                    <td style="width:5px"><input type="text" name="vtnul"><br></td>
                                    <td colspan="2">-</td> 
                                <tr>
                                <tr>
                                    <td colspan="2"></td>                            
                                    <td  class="vot-cel" colspan="4">Votos recurridos</td>
                                    <td style="width:5px"><input type="text" name="vtrec"><br></td>
                                <tr>
                                <tr>
                                    
                                    <td colspan="2"></td>
                                    <td  class="vot-cel" colspan="4">Votos de identidad impugnada</td>
                                
                                    <td style="width:10px"><input type="text" name="vtimp"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="2"></td> 
                                    <td  class="vot-cel" colspan="4">Votos del Comando electoral</td>
                                    <td style="width:10px"><input type="text" name="vtcom"><br></td>
                                <tr>
                                <tr>
                                    <td colspan="2"></td> 
                                    <td  class="vot-cel" colspan="4">Votos en blanco</td>
                                    <td style="width:10px"><input type="text" name="vtbla"><br></td>
                                    <td colspan="2"></td> 
                                <tr>
                                
                            </table>
                        </div>


                        <div class="cont-btn">
                                
                                <!--input type="submit" width="10" align="center" value="Guardar"-->
                                <button type="submit" class="btn-enviar" onclick="regresar()">Guardar</button>
                                <button class="btn-borrar" onclick="resetear()">Borrar todo</button>
                            </div>
                            </form>
                        </div>
                            
                            <div class="cont-regresar">
                                <button class="btn-regresar" onclick="regresar()">Volver a Escuela</button>
                            </div>
                    </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</body>

</html>