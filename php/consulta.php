<?php 
include 'conexion.php';

$usuario= $_SESSION['usuario'];
$sql="SELECT * from members WHERE usuario='$usuario'" ;
$registro=mysqli_query($cnx,$sql);

$campo=mysqli_fetch_array($registro);


?>