<?php  
include 'conexion.php';
$folio=$_POST['folioo'];

$sSQL="Update correspondencia Set trabajado=' ', fechaTrabajo=' ',trabajo=' ' Where folio='$folio'";
$registro1=mysqli_query($cnx,$sSQL);

echo'<script type="text/javascript">
window.location.href="../inicio.php";
</script>';
?>