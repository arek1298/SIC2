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
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>Document</title>
    </head>
<body>

<div class="gridtop">
<img src="img/logo.png" alt="">
<h1> Elaboración de Oficios Servicios</h1>
<h6 class="h6">Delegación coahuila <br>
        Subdelegación de prestaciones   <br>
        Departamento de pensiones</h6>
        <style>
           .gridtop h6{
    color: white;
    text-align: right;
    margin-top: -50px;
    margin-right: 10px;
</style>
</div>
<div class="inline"> 

<a class="btn btn-lig" href="oficios.php" role="button" style="width: 100px; height: 90px; background-color: white;"><i class="fas fa-chevron-circle-left fa-5x"></i></a>

 


    
    

</div>
<br>
<br>
<br>
<div class="grid-container">

    
    

    
    <div class="grid-item"> <a href="generarOficio1.php" style="width: 350px; font-size: 22px; height: 115px;" class="btn btn-info btn-lg active">Cambio de cuota (otorgamiento de pension)</a></div>
    <div class="grid-item"><a href="generarOficio2.php" style="width: 300px; font-size: 22px; height: 115px;" class="btn btn-info btn-lg active">Alta de deudo</a></div>
   
    <div class="grid-item"><a href="generarOficio3.php" style="width: 300px; font-size: 22px; height: 115px;" class="btn btn-info btn-lg active" >Baja de pension <br>(Gasto Funeral)</a></div>
    <div class="grid-item"><a href="generarOficio5.php" style="width: 300px; font-size: 22px; height: 115px;" class="btn btn-info btn-lg active">Baja de seguro Institucional</a></div>
    <div class="grid-item"><a href="generarOficio8.php" style="width: 300px; font-size: 22px; height: 115px;" class="btn btn-info btn-lg active">Designacion de beneficiarios</a></div>
    <div class="grid-item"><a href="generarOficio9.php" style="width: 300px; font-size: 22px; height: 115px;" class="btn btn-info btn-lg active">Cambio clabe interbancaria</a></div>
    </html>
 
    
    
   