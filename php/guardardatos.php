<?php 
include 'conexion.php';

$_POST['nombre']=$nombre;
$_POST['calle']=$calle;
$_POST['colonia']=$colonia;
$_POST['cp']=$cp;
$_POST['ciudad']=$ciudad;
$_POST['oficio1']=$oficio1;
$_POST['oficio2']=$oficio2;
$_POST['oficio3']=$oficio3;
$_POST['oficio4']=$oficio4;
$_POST['oficio5']=$oficio5;

mysqli_query($cnx,"INSERT INTO enviar values
(
' ',
'$nombre',
'$calle',
'$colonia',
'$cp',
'$ciudad',
'$oficio1',
'$oficio2',
'$oficio3',
'$oficio4',
'$oficio5'
)");



?>