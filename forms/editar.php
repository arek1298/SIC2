<?php 
include '../php/conexion.php';
session_start();
if (empty($_SESSION['usuario'])) {
echo'<script type="text/javascript"> alert("Tu sesión ha caducado");
window.location.href="../index.php";</script>';
}
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
    <script src="../js/main.js"></script>
    <title>Document</title>
</head>
<body>
<div class="gridtop">
<img src="../img/logo.png" alt="">
<h1> Correspondencia Interna</h1>
<h3>Delegación coahuila <br>
        Subdelegación de prestaciones   <br>
        Departamento de pensiones</h3>
</div>
<br>
<a href="internas.php" style="margin-left: 10px;">Regresar</a>
<div class="form">
    
<form class="form-inline" method="POST" style="margin-left:7em">
    <h1>Realiza una busqueda mediante el folio del oficio</h1>
<input type="text" name="busqueda" placeholder="Ingresa el folio o la fecha">

<button class="button" type="submit" name="buscar">Buscar</button>
</form>

</div>


<table align="center" style="background-color:white">
    <tr>
        <td>Fecha de Registro</td>
        <td>Folio</td>
        <td>Tema</td>
        


    </tr>

<?php 

$sql= "SELECT * FROM correspondencia ORDER BY  id DESC";
$registro =mysqli_query($cnx,$sql);
while ($campo = mysqli_fetch_array($registro)) {
    
?>

<tr>
    <td> <?php echo $campo['fecha'] ?></td>
    <td> <?php echo $campo['folio'] ?></td>
    <td> <?php echo $campo['tema'] ?></td>
    <td style="background-color:white;"><form method="post" action="editarRegistro.php">
    
<input type="hidden" name="folio" value="<?php echo $campo['folio'] ?>">


<button type="submit" style="width:32px;height: 32px; background-image:url(../img/editar.png); background-repeat:no-repeat; background-color:transparent;" name="editar" ></button>

</form></td>
</tr>




<?php }

 ?>
</table>




         
</body>
</html>