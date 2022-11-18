<?php

$mensaje="";




if(isset($_POST['registrar'])){


    
    switch($_POST['registrar']){
        case 'agregar':


$clave=$_POST['clave'];
$nombreDestino=$_POST['destino'];


if($nombreDestino==0){

$cargo=$_POST['cargo'];
$nombre=$_POST['nombre'];
$calle=$_POST['calle'];
$colonia=$_POST['colonia'];
$cp=$_POST['cp'];
$ciudad=$_POST['ciudad'];

$direcciones= "CALLE"." ".$calle." "."COLONIA"." ".$colonia." "."C.P ".$cp;

}else{

    $sql="SELECT * FROM destinos WHERE nombre='$nombreDestino'";
    $registro=mysqli_query($cnx,$sql);
    $campo=mysqli_fetch_array($registro);
    
$cargo=$campo['cargo'];
$nombre=$campo['nombre'];
$ciudad=$campo['ciudad'];
$direcciones=$campo['direccion'];


}
            $CLAVE=$_POST['clave'];
            $DIRECCION=$direcciones;
            $NOMBRE=$nombre;
            $CARGOS=$cargo;
            $CIUDAD=$ciudad;
            $OFICIO1=$_POST['oficio1'];
            $OFICIO2=$_POST['oficio2'];
            $OFICIO3=$_POST['oficio3'];
            $OFICIO4=$_POST['oficio4'];
            $OFICIO5=$_POST['oficio5'];
            $OFICIO6=$_POST['oficio6'];
            $OFICIO7=$_POST['oficio7'];
            $OFICIO8=$_POST['oficio8'];
            $OFICIO9=$_POST['oficio9'];
            $OFICIO10=$_POST['oficio10'];
            $OFICIO11=$_POST['oficio11'];
            $OFICIO12=$_POST['oficio12'];
            $OFICIO13=$_POST['oficio13'];
            $OFICIO14=$_POST['oficio14'];
            $OFICIO15=$_POST['oficio15'];
            $OFICIO16=$_POST['oficio16'];
            $OFICIO17=$_POST['oficio17'];
            $OFICIO18=$_POST['oficio18'];
            $OFICIO19=$_POST['oficio19'];
            $OFICIO20=$_POST['oficio20'];
           
                
if(!isset($_SESSION['carrito'])){
    
    $oficios=array(
        'CLAVE'=>$CLAVE,
        'DIRECCION'=>$DIRECCION,
        'NOMBRE'=>$NOMBRE,
        'CARGO'=>$CARGOS,
        'CIUDAD'=>$CIUDAD,
        'OFICIO1'=>$OFICIO1,
        'OFICIO2'=>$OFICIO2,
        'OFICIO3'=>$OFICIO3,
        'OFICIO4'=>$OFICIO4,
        'OFICIO5'=>$OFICIO5,
        'OFICIO6'=>$OFICIO6,
        'OFICIO7'=>$OFICIO7,
        'OFICIO8'=>$OFICIO8,
        'OFICIO9'=>$OFICIO9,
        'OFICIO10'=>$OFICIO10,
        'OFICIO11'=>$OFICIO11,
        'OFICIO12'=>$OFICIO12,
        'OFICIO13'=>$OFICIO13,
        'OFICIO14'=>$OFICIO14,
        'OFICIO15'=>$OFICIO15,
        'OFICIO16'=>$OFICIO16,
        'OFICIO17'=>$OFICIO17,
        'OFICIO18'=>$OFICIO18,
        'OFICIO19'=>$OFICIO19,
        'OFICIO20'=>$OFICIO20

        );
        $_SESSION['carrito'][0]=$oficios;
                   
        
}else{
 
 $idOficio=array_column($_SESSION['carrito'],"CLAVE");
 if(in_array($CLAVE,$idOficio)){
     
      
 }else{
 
    $numeroOficios=count($_SESSION['carrito']);
     $oficios=array(
        'CLAVE'=>$CLAVE,
        'DIRECCION'=>$DIRECCION,
        'NOMBRE'=>$NOMBRE,
        'CARGO'=>$CARGOS,
        'CIUDAD'=>$CIUDAD,
        'OFICIO1'=>$OFICIO1,
        'OFICIO2'=>$OFICIO2,
        'OFICIO3'=>$OFICIO3,
        'OFICIO4'=>$OFICIO4,
        'OFICIO5'=>$OFICIO5,
        'OFICIO6'=>$OFICIO6,
        'OFICIO7'=>$OFICIO7,
        'OFICIO8'=>$OFICIO8,
        'OFICIO9'=>$OFICIO9,
        'OFICIO10'=>$OFICIO10,
        'OFICIO11'=>$OFICIO11,
        'OFICIO12'=>$OFICIO12,
        'OFICIO13'=>$OFICIO13,
        'OFICIO14'=>$OFICIO14,
        'OFICIO15'=>$OFICIO15,
        'OFICIO16'=>$OFICIO16,
        'OFICIO17'=>$OFICIO17,
        'OFICIO18'=>$OFICIO18,
        'OFICIO19'=>$OFICIO19,
        'OFICIO20'=>$OFICIO20

        );
         $_SESSION['carrito'][$numeroOficios]=$oficios;
         
     

         
}     

}

           break;
           
           case "eliminar";
           
           $CLAVE=$_POST['clave'];
        
                foreach($_SESSION['carrito']as $indice=>$oficios){
                    if($oficios['CLAVE']==$CLAVE){
                        unset($_SESSION['carrito'][$indice]);
                        
     

                        
                        
                    
                        
                    }
                    
                }
                
            }

}


?>