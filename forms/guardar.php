<?php 
session_start();
include '../php/conexion.php';

$id=$_POST['id'];
$folio=$_POST['folio'];
$correspondencia=$_POST['correspondencia'];
$servicio=$_POST['servicio'];
$fecha=$_POST['fechaOficio'];
$solicita=$_POST['solicita'];
$dep=$_POST['dep'];
$tema=$_POST['tema'];
$asigno=$_POST['asigno'];



$sSQL="Update correspondencia Set correspondencia='$correspondencia', servicio='$servicio',folio='$folio', fechaOficio='$fecha',solicita = '$solicita', dep='$dep',tema= '$tema', asigno='$asigno' Where id='$id'";
$registro1=mysqli_query($cnx,$sSQL);

echo'<script type="text/javascript">
alert("Cambios Guardados");
window.location.href="editar.php";
</script>';
   


?>