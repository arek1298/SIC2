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
<h2 value="">EDITAR BAJA DE PENSION <br>(trámite de gasto de funeral) </h2>
<form action="pdf5.php" method="post" >
<br>

           
                <h3>Escribe los datos  </h3><BR>
                <label>Escribe le nombre:</label>
                <input type="text" placeholder="NOMBRE:" name="nombre" style="text-transform:uppercase" required>
                <label>Escribe le RFC:</label>
                <input type="text" placeholder="RFC" name="rfc" style="text-transform:uppercase" required
       minlength="10" maxlength="13" size="10"> 
                <label>Escribe le numero de pensión:</label>
                <input type="number" placeholder="No. Pensión" name="numero" required>  
                <label>Escribe la fecha del fallecimiento</label>
                <input type="date" placeholder="Fecha de fallecimiento" name="fecha" required> 
<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>