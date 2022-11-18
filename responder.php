<?php
session_start();
include 'php/conexion.php';
include 'php/consultas.php'; 
include 'noSesion.php';
#echo $_SESSION['usuario'];
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
    <link rel="stylesheet" href="estilo/style2.css">
    <script src="js/jquery.js "></script>
    <script src="js/cargar.js "></script>
    <title>Document</title>
</head>
<body>


<div class="gridtop">
<img src="img/logo.png" alt="">
<h1>Respuestas</h1>

<br>
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
<div class="inline">
    <a class="btn btn-lig" href="inicio.php" role="button" style="width: 100px; height: 90px; background-color: white;"><i class="fas fa-chevron-circle-left fa-5x"></i></a>
 </div>
<div class="form">
<form class="form-inline" method="POST" action="">
 
      <input type="text" class="" placeholder="Escribe el folio del archivo a responder"   name="folio"/>
        <button class="button" name="buscar" id="buscar" > Buscar</button> 
      
    </form>

</div>

<table align="center" style="background-color:white">
    <tr>
        <td>Fecha </td>
        <td>Folio</td>
        <td>Tema</td>
        <td>Responder</td>
    </tr>

<?php 


$sql2="SELECT * FROM correspondencia WHERE trabajado!='si' ORDER BY id DESC";
$registro=mysqli_query($cnx,$sql2);
while($campo=mysqli_fetch_array($registro)){


?>
<tr>
    
        <td><?php echo $campo['fecha']?></td>
        <td><?php echo $campo['folio']?></td>
        <td><?php echo $campo['tema']?></td>
        <td><form method="POST" action="php/comenzar.php">
            <input type="hidden" name="folio" value="<?php echo $campo['folio']?>">
            <button type="submit"  style="background-color:transparent; background-image:url(img/responder.png); width: 64px; height:64px">
            </button>
        </form></td>

</tr>
<?php }?>
</table>
</body>

</html>