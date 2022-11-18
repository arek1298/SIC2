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
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

    <!-- CSS only -->

    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!--link rel="stylesheet" type="text/css" href="estilo/style.css"-->

    <title>Document</title>
</head>
<body>
  <div class="gridtop">

<img src="img/logo.png" style="width: 170px;" alt="">
<h1>Sistema de correspondencia</h1>


<h6>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h6>
        <style>
           .gridtop h6{
    color: white;

    text-align: right;
    margin-top: -50px;
    margin-right: 10px;
</style>

        
</div>
<br>
<div class="alert alert-info" role="alert">
  <center> <h6 class="holi">Bienvenido (a): <?php echo $campo['nombre']?>&ensp;&ensp;&ensp;&ensp;<a href="index.php" class="btn btn-sm btn-danger" style="border-color: black;"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>&ensp;&ensp;SALIR</a></center>
</div>

<style >
  .holi{
    color: black;
    font-size: 25px;   }
</style>
<div class="grid-container">
 

    <div class="grid-item">
<a href="forms/internas.php" class="btn btn-lg btn-default" style="width: 360px; font-size: 30px;height: 160px; border-color:black; background-color: white;">Regístrar <br> Correspondencia<br><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></div></a>
<div class="grid-item">
<a href="oficios.php" class="btn btn-lg btn-default" style="width: 360px; font-size: 30px;height: 160px; border-color: black; background-color: white;">Elaborar <br> Oficio<br><i class="fa fa-pencil-square-o  fa-2x" aria-hidden="true"></i></a></div>
<div class="grid-item">

<a href="datos.php" class="btn btn-lg btn-default" style="width: 360px; font-size: 30px;height: 160px; border-color: black; background-color: white;">Reportes<br><i class="fa fa-file-text fa-2x" aria-hidden="true"></i></a></div>
<div class="grid-item">
<a href="responder.php" class="btn btn-lg btn-default" style="width: 360px; font-size: 30px;height: 160px; border-color: black; background-color: white;">Responder<br><i class="fa fa-inbox fa-2x" aria-hidden="true"></i></a></div>
<div class="grid-item">

<a href="generar.php" class="btn btn-lg btn-default" style="width: 360px; font-size: 30px;height: 160px; font-size: 30px; border-color: black; background-color: white;">Enviar<br>Correspondencia<br><i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i></a></div>
<div class="grid-item">

<a href="verConsulta.php" class="btn btn-lg btn-default" style="width: 360px; font-size: 30px;height: 160px; font-size: 40px; border-color: black; background-color: white;">Consultas<br><i class="fa fa-search fa-2x" aria-hidden="true"></i></a></div>
</div>

<?php 
$sql="SELECT permisos FROM members WHERE usuario ='$user'";
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);



$dia=date('d');

if ($dia=='2' || $dia=='15' AND $campo['permisos']=='1' ) {
    
echo'<script type="text/javascript"> alert("Recuerda realizar un respaldo de la base de datos");
</script>';

}




if ($campo['permisos']=='1') {
    ?>
<div class="grid-item"><a href="admin.php" class="btn btn-lg btn-default" style="width: 360px; font-size: 30px;height: 160px; font-size: 40px; border-color: black; background-color: white;">Menú Admin<br><i class="fa fa-user-secret fa-2x" aria-hidden="true"></A></i></div>
    <?php
}


     ?>


 

</body>
</html>







