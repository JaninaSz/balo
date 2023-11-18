<?php
    include("connection.php");
    $con = connection();
   
function getTable($lectura)
{
    global $con;
     //suma las columnas de la base de datos:
    $sql1 = "SELECT SUM(pres_1) AS tpd1 , SUM(pres_2) AS tpd2, SUM(cantivo) AS tvot, SUM(vtnul) AS tnul, SUM(vtrec) AS trec, SUM(vtimp) AS timp, SUM(vtcom) AS tcom, SUM(vtbla) AS tbla FROM `votos`";
    $ejecutar = mysqli_query($con, $sql1);
    return $ejecutar;
    if (!$ejecutar) {
        printf("Errormessage: %s\n", mysqli_error($con));
        //echo"Hubo Algun Error";
    }
}

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
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/generales.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="../styles/media.css">    
    <link rel="stylesheet" href="/balo/styles/res-part.css">
    <style data-styled="active" data-styled-version="5.3.11"></style>
    <title>generales</title>
</head>

<body onload="carCirc()">
<?php

//recorre los totales para mostrarlos
function iterateDataToTable($data1)
{
    $lines = '';
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

    //muestra los resultados de la consulta
    echo $lines;
?>

<div class="cont-tit">
        <div class="tit"><h3> Resultados por circuito</h3><b><span class="sp-votos" id="sp-nci"></span></b></div><br>
        <p class="sub" id="p-seleccionado"></p>
    </div>

                    <div class="cont-parla">
                        <div>
                            <span class="lbl-mesa"><b> Circuito: </b></span>
                            <select name="circ" id="sltCirc">
                                <option value="99"><b>Todos </b></option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                            </select>
                            <hr><button class="btn-ver" onclick="selecCirc()">Consultar</button>
                            <!--hr><button class="btn-ver" onclick="selCirc()">Consultar</button-->
                        </div>

                        <div><span class="lbl-mesa"><b> Esc.: </b></span>
                            <select name="esc" id="sltEsc">
                                <option><b>Todas</b></option>
                                <option>Esc. Belgrano</option>
                                <option>Col. Belgrano</option>
                                <option>Esc. Sarmiento</option>
                                <option>Esc. Tecnica</option>
                                <option>Col. Sorribes</option>
                                <option>Esc. Rosende</option>
                                <option>Esc. 16 de Nov.</option>
                                <option>Esc. Centenario</option>
                                <option>Col. San Martin</option>
                                <option>Esc. Alberdi</option>
                                <option>Esc. Cazadores</option>
                                <option>Esc. Paraiso</option>
                                <option>Esc. Baibiene</option>
                                <option>Esc. J M Paz</option>
                                <option>Esc. Santa Cruz</option>
                            </select>
                            <hr><button class="btn-ver" onclick="selecEsc()">Consultar</button>
                            <!--hr><button class="btn-ver" onclick="selEsc()">Consultar</button-->
                        </div>
                        <div>
                            <span id="lbl-mesa"><b> Mesa N° </b></span>
                            <select name="mesa" id="sltMes">
                                <option><b>Todas</b></option>
                                <option>1136</option>
                                <option>1137</option>
                                <option>1138</option>
                                <option>1139</option>
                                <option>1140</option>
                                <option>1141</option>
                                <option>1142</option>
                                <option>1143</option>
                                <option>1144</option>
                                <option>1145</option>
                                <option>1146</option>
                                <option>1147</option>
                                <option>1148</option>
                                <option>1149</option>
                                <option>1150</option>
                                <option>1151</option>
                                <option>1152</option>
                                <option>1153</option>
                                <option>1154</option>
                                <option>1155</option>
                                <option>1156</option>
                                <option>1157</option>
                                <option>1158</option>
                                <option>1159</option>
                                <option>1160</option>
                                <option>1161</option>
                                <option>1162</option>
                                <option>1163</option>
                                <option>1164</option>
                                <option>1165</option>
                                <option>1166</option>
                                <option>1167</option>
                                <option>1168</option>
                                <option>1169</option>
                                <option>1170</option>
                                <option>1171</option>
                                <option>1172</option>
                                <option>1173</option>
                                <option>1174</option>
                                <option>1175</option>
                                <option>1176</option>
                                <option>1177</option>
                                <option>1178</option>
                                <option>1179</option>
                                <option>1180</option>
                                <option>1181</option>
                                <option>1182</option>
                                <option>1183</option>
                                <option>1184</option>
                                <option>1185</option>
                                <option>1186</option>
                                <option>1187</option>
                                <option>1188</option>
                                <option>1189</option>
                                <option>1190</option>
                                <option>1191</option>
                                <option>1192</option>
                                <option>1193</option>
                                <option>1194</option>
                                <option>1195</option>
                                <option>1196</option>
                                <option>1197</option>
                                <option>1198</option>
                                <option>1199</option>
                                <option>1200</option>
                                <option>1201</option>
                                <option>1202</option>
                                <option>1203</option>
                                <option>1204</option>
                                <option>1205</option>
                                <option>1206</option>
                                <option>1207</option>
                                <option>1208</option>
                                <option>1209</option>
                                <option>1210</option>
                                <option>1211</option>
                                <option>1212</option>
                                <option>1213</option>
                                <option>1214</option>
                                <option>1215</option>
                                <option>1216</option>
                                <option>1217</option>
                                <option>1218</option>
                                <option>1219</option>
                                <option>1220</option>
                                <option>1221</option>
                                <option>1222</option>
                                <option>1223</option>
                                <option>1224</option>
                                <option>1225</option>
                                <option>1226</option>
                                <option>1227</option>
                                <option>1228</option>
                                <option>1229</option>
                                <option>1230</option>
                                <option>1231</option>
                                <option>1232</option>
                                <option>1233</option>
                                <option>1234</option>
                                <option>1235</option>
                                <option>1236</option>
                            </select>
                            <hr><button class="btn-ver" onclick="selecMes()">Consultar</button>
                            <!--hr><button class="btn-ver" onclick="selMes()">Consultar</button-->
                            <br>
                        </div>
                    </div>

                    <main>
                        <br><!-- sin tabla -->
                        <div class="contParla">
                            <div class="cont-todos">
                                <p class="pf-encab">Presidente - Vicepresidente</p>
                                <p> </p>
                            </div>
                        </div>
                        <div class="cont-parla">
                            <p> </p>
                            <div class="cont-task3" id="contTask2">
                                <img class="h-12-w-12 " src="../assets/logos/000134.png" alt="logo_agrupacion"><br>
                                <hr>
                                <p class="sp-votos"><b> <span id="tpd-1"> </b></span> votos</p>
                                <!--p class="sp-votos"><b><span class="tpr-3" id="tpd-3"></b></span> votos</p-->

                            </div>
                            <div class="cont-task3" id="contTask3">
                                <img class="h-12-w-12 " src="../assets/logos/000135.png" alt="logo_agrupacion"><br>
                                <hr>
                                <p class="sp-votos"><b><span class="tpr-4" id="tpd-2"> </b> </span> votos</p>

                            </div>
                            <p> </p>
                        </div>
                        <br><hr><br>
                        <div class="cont-parla" id="contParla">
                            <div>
                                <span>Nulos</span><br>
                                <span id="spnul"></span>
                            </div>
                            <div>
                                <span>Recurridos</span><br>
                                <span id="sprec">0</span>
                            </div>
                            <div>
                                <span>Impugnados</span><br>
                                <span id="spimp">0</span>
                            </div>
                            <div>
                                <span>Comando</span><br>
                                <span id="spcom">0</span>
                            </div>
                            <div>
                                <span>Blancos</span><br>
                                <span id="spbla">0</span>
                            </div>
                        </div>
                        
                    </main>
                </div>
            </div>
        </section>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="/balo/scripts/calcirc.js"></script>
    <script src="/balo/scripts/votos.js"></script>
    <!--script src="/balo/scripts/readcirc.js"></script-->
</body>

</html>