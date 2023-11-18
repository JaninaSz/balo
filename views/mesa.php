<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mesas</title>
</head>

<body>
    <div class="us-form">
        <h1>Cargar mesa</h1>
        <form action="agregarmesa.php" method="POST">
            <input type="number" name="numescu" placeholder="Num esc">
            <input type="number" name="numesa" placeholder="num mesa">

            <input type="submit" width="10" align="center" value="Agregar">
        </form>
    </div>
    <!--script> onclick=ver() 
        function ver(){
            window.history.back;
            alert("mesa"+ numescu + "num"+numesa)
       } 
    </script-->
</body>

</html>