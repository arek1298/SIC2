<?php  
session_start();
include 'php/conexion.php';
include 'php/consulta.php';
include 'noSesion.php';
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
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="estilo/style.css">
    <title>Document</title>
</head>
<body>

<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Consultas</h1>

<h6>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones</h6>
        <style>
             .gridtop h6{
    color: white;

    text-align: right;
    margin-top: -30px;
    margin-right: 10px;
        </style>
</div>
<div class="inline">
    <a class="btn btn-lig" href="inicio.php" role="button" style="width: 100px; height: 90px; background-color: white;"><i class="fas fa-chevron-circle-left fa-5x"></i></a>
 </div>



<div class="form">

<form class="form-inline" method="POST" action="">
 
      <input type="text" class="" placeholder="busqueda"   name="buscar"/>
        <button class="button" name="search">Buscar</button> 
       
    </form>

</div>



<div ALIGN="CENTER" class="table">
<table style="empty-cells:hide;" width="100%">
						<tr class="head">
                             <td>Area</td>
                             <td>No. de Oficio</td>
                            <td>Nombre de quien lo solicita</td>
                            <td >Tema</td>
                            <td >Archivo Registrado</td>
                            <td >Trabajado</td>
                            <td>Fecha de la respuesta</td>
                            <td >Respuesta</td>
                            <td >Archivo respuesta</td>
                            <td>PDF</td>
						</tr>
					
					<tbody>

<?php  include 'php/verConsultas.php';?>


                    </tbody>		
					
					</table>

<h1></h1>
</div>

    </div>
    
</body>
</html>