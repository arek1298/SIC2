<?php 
session_start();
include 'conexion.php';

$fecha= date('d/m/y');
$hola=$_SESSION['usuario'];
$folio=$_POST['folio'];


$sql="SELECT * from members WHERE usuario='$hola'" ;
$registro=mysqli_query($cnx,$sql);
$campo=mysqli_fetch_array($registro);

$usuario=$campo['nombre'];

$sSQL="Update correspondencia Set trabajado='si', fechaTrabajo='$fecha',trabajo='$usuario' Where folio='$folio'";
$registro1=mysqli_query($cnx,$sSQL);

echo'<script type="text/javascript">
alert("Se trabajará el oficio"+" "+"'.$folio.'"+" "+"por el usuario"+" "+"'.$hola.'");
window.location.href=" ../respuesta.php?folio='.$folio.'";
</script>';
   
    



?>