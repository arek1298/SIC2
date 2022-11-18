<?php 
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
include 'php/elaborar.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <title> Elaboracíon de oficio</title>
</head>
<body>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1> USUARIO :</h1>
<h1><?php echo $campo['nombre']?></h1>
<h3>Delegación coahuila <br>
Subdelegación de prestaciones</h3>
</div>
<div class="grid">

<div class="int">
<br><br>

<a href="inicio.php">Regresar</a><br><br><br>

<br><br>

</div>


<div class="form">

<h1>Elaboración de oficio</h1>
<form  method="post">
            <input  type="text" name="nombre" placeholder="Nombre del pensionado fallecido" >
            <input  type="text" name="usuario" placeholder="Número del ISSSTE" >
            <input type="text" name="cargo"placeholder="Curp">
            
           
            <button class="guardar">Registrar</button>
            <style>
          .guardar{
              background-color: green;

          }
            </style>
        </form>

</div>

    </div>
    

</body>
</html>

