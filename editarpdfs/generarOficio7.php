<?php
session_start();
include '../php/conexion.php';
include '../noSesion.php';
echo $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <link rel="stylesheet" href="../estilo/style2.css">
    <script src="../js/jquery.js "></script>
    <script src="../js/cargar.js "></script>
    <title>Document</title>
</head>
<script>
	
	</script>
<body>

<div class="inline"> 

</div>
<div class="gridtop">
<img src="../img/logo.png" alt="">
<h1>Enviar correspondencia</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br><br><br>

<div class="respuesta">
<br>
<h2 value="">EDITAR ELABORACION DE CUENTA <h2 style="color:blue"></h2></h2>
<form action="pdf14.php" method="post">
<br>

           
                <h3>Escribe los datos:  </h3><BR>
                <label>Promovido por:</label>
                <input type="text" placeholder="PROMOVIDO POR:" name="promo" required><br>
               <label>Escribe el RFC:</label>
                <input type="text" placeholder="RFC:" name="rfc"required minlength="10" maxlength="13" ><br>
                <label>Escribe el Numero de Pension:</label>
                <input type="text" placeholder="No. Pensión:" name="NP" required><br>
                <label>Escribe el domicilio:</label>
                  <input type="text" placeholder="Domicilio:" name="domicilio" required><br>
                <label>Concepto a pagar:</label>
                <input type="text" placeholder="CONCEPTO A PAGAR" name="pago" step="0.01" required><br>
                <label>Periodo</label>
                <input type="text" placeholder="PERIODO" name="periodo" required> <br>
                <label>Fecha de sentencia:</label>
                <input type="date" placeholder="FECHA DE SENTENCIA" name="fechaS" required><br> 
                <label>Emisor de la sentencia:</label>
                <input type="text" placeholder="EMISOR DE LA SENTENCIA" name="emisor" required><br> 
                <label>Numero de Expediente:</label>
                <input type="text" placeholder="No. Expediente" name="numEx" required><br>
                <label>Cifra a pagar:</label>
                <input type="number" placeholder="CIFRA A PAGAR" name="cifra" step="0.01" required><br>  
<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>