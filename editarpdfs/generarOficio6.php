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
<h2 value="">EDITAR PETICION DE DOCUMENTOS <h2 style="color:blue"></h2></h2>
<form action="pdf8.php" method="post">
<br>

           
                <h3>Escribe los datos:  </h3><BR>
                <label>Juicio de Amparo:</label>
                <input type="text" placeholder="JUICIO DE AMPARO:" name="juicio" required><br>
         <label>Fecha:</label>
                <input type="date" placeholder="FECHA:" name="fecha" required><br>
                <label>Lugar de promoción:</label>
                  <input type="text" placeholder="LUGAR" name="lugarP" required><br>
                <label>Promovido por:</label>
                  <input type="text" placeholder="PROMOVIDO POR:" name="promo" required><br>
                <label>Fecha de notificacion:</label>
                <input type="date" placeholder="FECHA DE NOTIFICACION" name="fechaN" required> 
                <label>Nombre de la persona que se requiere información:</label>
                  <input type="text" placeholder="NOMBRE DEL ACTOR" name="nombreA" required><br>
                  <label>RFC de la persona que se requiere información:</label>
                  <input type="text" placeholder="RFC DEL ACTOR" name="rfcA" required minlength="10" maxlength="13"><br>
<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>