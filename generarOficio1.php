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
<h1>Cambio de cuota</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br><br><br>

<div class="respuesta">
<br>
<h2 value="">CAMBIO DE CUOTA <h2 style="color:blue"></h2></h2>
<form action="pdf3.php" method="post"  >
<br>

           
                <h3>Escribe los datos  </h3><BR>
                <label>Nombre del fallecido:</label>
                <input type="text" placeholder="Nombre del Fallecido" name="nombreFallecido" style="text-transform:uppercase" required>
                <label>Nombre del beneficiario:</label>
                <input type="text" placeholder="Nombre del beneficiario" name="nombreBeneficiario" style="text-transform:uppercase"  required>  
                <label>Numero de pension</label>
                <input type="number" placeholder="NUMERO DE PENSION" name="numeroPension" required> 
                <label>Escribe el RFC:</label>
                <input type="text" placeholder="RFC" name="rfc" style="text-transform:uppercase" required
       minlength="10" maxlength="13" size="10"> 
                <label>Cuota diaria existente:</label>
                <input type="number" placeholder="CUOTA DIARIA EXISTENTE" name="cuotaDiariaE" step="0.01" required> 
                <label>Cuota diaria a modificar:</label>
                <input type="number" placeholder="CUOTA DIARIA A MODIFICAR" name="cuotaDiariaM" step="0.01" required> 
                <label>Escribe el motivo:</label>
                <input type="text" placeholder="MOTIVO" name="motivo" required> 
<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>