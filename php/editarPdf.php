<?php 
session_start();
include 'conexion.php';

$id=$_POST['id'];
$tipo=$_POST['tipo'];
$descripcion=$_POST['descripcion'];



$_SESSION['id']=$id;
if ($tipo!='PDF'){

echo "esto es una respuesta";

}



if ($tipo=='PDF') {
	

	if ($descripcion=='BAJA DE PENSION') {
			header("location:../editarPdfs/generarOficio3.php");
	} 

	if ($descripcion=='FALTA DE CURP E INE') {
		header("location:../editarPdfs/generarOficio11.php");
	} 

	if ($descripcion=='NOTIFICACION A JURIDICO') {
		header("location:../editarPdfs/generarOficio10.php");
	} 

	if ($descripcion=='ELABORACION DE CUENTA') {
			header("location:../editarPdfs/generarOficio7.php");
	} 

	if ($descripcion=='PETICION DE DOCUMENTOS') {
			header("location:../editarPdfs/generarOficio6.php");
	} 

	if ($descripcion=='DESIGNACION DE BENEFICIARIOS 22') {
			header("location:../editarPdfs/generarOficio8.php");
	} 

	if ($descripcion=='ESCRITO DE PETICION') {
		header("location:../editarPdfs/generarOficio13.php");
	} 

	if ($descripcion=='DEVOLUCION DE SENTENCIA') {
		header("location:../editarPdfs/generarOficio12.php");
	} 

	if ($descripcion=='CAMBIO DE CLAVE INTERBANCARIA') {
			header("location:../editarPdfs/generarOficio9.php");
	} 


	if ($descripcion=='BAJA DE SEGURO INSTITUCIONAL') {
			header("location:../editarPdfs/generarOficio5.php");
	} 

	if ($descripcion=='CAMBIO DE ESTATUS') {
			header("location:../editarPdfs/generarOficio4.php");
	} 

if ($descripcion=='ALTA DE DEUDO') {
		header("location:../editarPdfs/generarOficio2.php");
	} 


if ($descripcion=='CAMBIO DE CUOTA') {
		
header("location:../editarPdfs/generarOficio1.php");

	} 

}
 ?>
	
