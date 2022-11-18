<?php 
include 'php/conexion.php';


if(isset($_POST['registrar']) && $_POST['contrasena']!=$_POST['contrasena2']){
    echo ' contrasenas distintas';
}


else if(!empty($_POST['nombre']) &&!empty($_POST['usuario'])
   &&!empty($_POST['contrasena']) &&!empty($_POST['permisos'])){
    if($_POST['permisos']==1){ //administrador
        header("location:admin.php");
    
    }else
    if($_POST['permisos']==2){ //**USUARIO***//
    header("location:admin.php");
    }

mysqli_query($cnx,"INSERT INTO members values
(
'$_POST[id]',
'$_POST[nombre]',
'$_POST[usuario]',
'$_POST[cargo]',
'$_POST[rfc]',
'$_POST[contrasena]',
'$_POST[permisos]'
)");

echo 'REGISTRO EXITOSO';
 }

?>



<php

#include 'conexion.php';

#$nombre=$_POST['nombre'];
#$apellidos=$_POST['apellidos'];
#$telefono=$_POST['telefono'];
#$email=$_POST['email'];
#$password=$_POST['password'];



#$cnx=conn();
#$sql="INSERT INTO usuarios (nombre,apellidos,telefono,email,password)
#VALUES('$nombre','$apellidos','$telefono','$email','$password')";
#$resul = mysqli_query($cnx, $sql)or trigger_error("Query failed! SQL- ERROR: ".mysqli_error($cnx), E_USSER_ERROR);

#echo'Regístro';
#echo'<script type="text/javascript">
    #alert("Regístro Exitoso");
    #window.location.href="index.php";
    #</script>';
?>
