<?php
session_start();
include 'php/conexion.php';
include 'noSesion.php';
echo $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/style2.css">
    <script src="js/jquery.js "></script>
    <script src="js/cargar.js "></script>
    <title>Document</title>
</head>
<script>
	
	</script>
<body>

<div class="inline"> 

</div>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Notificación a Jurídico</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br><br><br>

<div class="respuesta">
<br>
<h2 value="">Notificación a Juridico <h2 style="color:blue"></h2></h2>
<form action="pdf15.php" method="post">
<br>

           
                 <label>Oficio del Juridico:</label>
                <input type="text" placeholder="Oficio de Juridico:" name="OJ" required ><br>
                <label>Fecha de Recepción del Oficio</label>
               
                <input type="date" placeholder="FECHA RECEPCION DEL OFICIO:" name="fecha" required ><br>
                <label>Fecha recepcion de sentencia:</label>
                <input type="date" placeholder="Fecha de Sentencia:" name="fecha2" required ><br>
                <label>EMITIDA POR:</label>
                <input type="texto" placeholder="Emitida por" name="emitida" required><br>
                <label>Numero de expediente: </label>
               
                <input type="number" placeholder="Numero de expediente" name="numex" required><br>
                <label>Nombre de pensionista:</label>
                  <input type="text" placeholder="Nombre DE PENSIONISTA:" name="nomP" required><br>
                  
                  <label>RFC:</label>
                  <input type="text" placeholder="RFC:" name="rfc" required><br>
                  <label>Numero de pensionista</label>
                  <input type="text" placeholder="Numero DE PENSIONISTA:" name="numP" required><br>
                  <label>Número de oficio de resolucion de pensiones</label>
                  <input type="text" placeholder="Numero De oficio de resolucion de pensiones:" name="orp" required ><br>
                
               

<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>