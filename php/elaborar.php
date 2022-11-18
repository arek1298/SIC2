<?php 
include 'php/conexion.php';



if(isset($_POST['registrar']))


 if(!empty($_POST['pensionado']) 
 &&!empty($_POST['num_issste'])
   &&!empty($_POST['curp'])){
    
    

mysqli_query($cnx,"INSERT INTO elaborar values
(
'$_POST[id]',
'$_POST[pensionado]',
'$_POST[num_issste]',
'$_POST[curp]',

)");

echo 'REGISTRO EXITOSO';
}

?>