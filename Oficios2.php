<?php
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
$user=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/style2.css">
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Elaboracion de oficios</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>
        <br>
       
        <div class="inline"> 
       
        
<br>
</div>
</div>


    
    <div class="grid-item"> <a href="servicios.php" class="button4" >Servicios</a></div><br>
    <div class="grid-item"><a href="oficioSentencias.php" class="button4">Cumplimiento <br>de sentencias</a></div><br>
   
    <div class="grid-item"><a href="" class="button4" class="disable">Medicina del trabajo</a></div><br>
    <div class="grid-item"><a href="oficioSeguridad.php" class="button4">Seguridad e Higiene</a></div><br>
    <a href="inicio.php" class="s"><img class="img1" src="img/r4.png">
    
    
   



    
    </div>

    </div>

</body>
</html>