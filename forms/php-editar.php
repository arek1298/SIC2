<?php 
include '../php/conexion.php';


$seturno=$_POST['seTurno'];
$folio=$_POST['foliooo'];

$sSQL="Update correspondencia Set asigno='$seturno' Where folio='$folio'";
$registro1=mysqli_query($cnx,$sSQL);


echo'<script type="text/javascript">
alert("Cambio correcto");
window.location.href="editar.php";
</script>';
   

?>