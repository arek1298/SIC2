<?php
include('Fuction_Backup.php');

echo backup_tables('localhost','root','','formulario');

$fecha=date("d-m-Y");
header("Content-disposition: attachment; filename=respaldo-".$fecha.".sql");
header("Content-type: MIME");
readfile("backups/respaldo-".$fecha.".sql");