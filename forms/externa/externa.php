<?php 
include ("../../php/registroOficio2.php");
session_start();
if (empty($_SESSION['usuario'])) {
echo'<script type="text/javascript"> alert("Tu sesión ha caducado");
window.location.href="../../index.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../../estilo/style.css">
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="../../img/logo.png" alt="">
<h1> Correspondencia Externa</h1>
<h3>Delegación coahuila <br>
        Subdelegación de prestaciones   <br>
        Departamento de pensiones</h3>
</div>
<div class="grid">

<div class="int " style="width: 220px; left: 15px;">
<br><br>
<a href="../interna/interna-servicios.php" style="width: 220px; font-size: 15px;"  class="disable" >Interna</a><br>
<a href="" class="select" style="width: 220px; font-size: 15px;">Externa</a><br>
<a href="externa-servicios.php" class="btn btn-primary" style="width: 220px; font-size: 15px;" >Servicios</a><br><br>
<a href="externa-seguridad.php" class="btn btn-primary" style="width: 220px; font-size: 15px;" >Seguridad e higiene</a><br><br>   
<a href="externa-medicina.php" class="btn btn-primary" style="width: 220px; font-size: 15px;" >Medicina del trabajo</a><br><br>
<a href="externa-sentencia.php" class="btn btn-primary" style="width: 220px; font-size: 15px;">Cumplimiento de sentencia</a><br><br>
<a class="btn btn-lig" style="background-color: #F9C350; color: black; width: 95px; height: 70px;" href="../internas.php">
 <i class="fa fa-reply fa-4x" ></i></a>


</div>


<div class="form">

<h1>Selecciona un tema</h1>
</div>

    </div>
    
</body>
</html>