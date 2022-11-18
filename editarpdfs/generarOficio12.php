<?php
session_start();
include '../php/conexion.php';
include '../noSesion.php';
echo $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <link rel="stylesheet" href="../estilo/style2.css">
    <script src="../js/jquery.js "></script>
    <script src="../js/cargar.js "></script>
    <title>Document</title>
</head>
<script>
        function miFuncion() {
            $("#nombreFamiliar1").hide();
      $("#parentesco1").hide();
      $("#curpF1").hide();

      $("#nombreFamiliar2").hide();
      $("#parentesco2").hide();
      $("#curpF2").hide();

 $("#nombreFamiliar3").hide();
      $("#parentesco3").hide();
      $("#curpF3").hide();


      $("#label").hide();
      $("#label2").hide();
        }

     
        </script>
<body onload="miFuncion()">

<div class="inline"> 

</div>
<div class="gridtop">
<img src="../img/logo.png" alt="">
<h1>Enviar correspondencia</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br><br><br>

<div class="respuesta">
<br>
<h2 value="">EDITAR DEVOLUCION DE SENTENCIA <h2 style="color:blue"></h2>
<h3></h3>
<form action="pdf18.php" method="post"  >
<br>

           
                <h3>Escribe los datos  </h3><BR>

            

            
            
                
            <label>Noº de Oficio</label>
                <input type="text" placeholder="Noº de Oficio" name="numeroOficio" style="text-transform:uppercase" required>
                <label>Nombre del Actor:</label>
                <input type="text" placeholder="Nombre del Actor:" name="nombre" style="text-transform:uppercase" required>  
                <label>Expediente:</label>
                <input type="text" placeholder="Expediente:" name="expediente"  required> 
                 
              
                
                <label for="susbcribe" class="label"> -Registrar una segunda sentencia:
           
           <input type="checkbox" name="subscribe" id="CheckBene"  class="check" >
                  
                  </label>
               <input type="text" style="border: 3px solid blue ;background-color:#CAD6FF" placeholder="Numero de oficio" name="numeroOficio2" id="nombreFamiliar1" > 

                <input type="text" style="border: 3px solid blue ;background-color:#CAD6FF" placeholder="Nombre del actor" name="nombre2" id="parentesco1"                > 
                <input type="text" style="border: 3px solid blue ;background-color:#CAD6FF" placeholder="Expediente" name="expediente2"  id="curpF1"        >



                <label for="susbcribe1" class="label"id="label"> -Registrar una tercer sentencia:
           
           <input type="checkbox" name="subscribe1" id="CheckBene1"  class="check">
                  
                  </label>
                <input type="text"  style="border: 3px solid green  ; background-color:#E0FFCA" placeholder="Numero de oficio" name="numeroOficio3" id="nombreFamiliar2"  > 

                <input type="text" style="border: 3px solid green ; background-color:#E0FFCA"  placeholder="Nombre del actor" name="nombre3" id="parentesco2"     > 

                <input type="text"  style="border: 3px solid green ; background-color:#E0FFCA" placeholder="Expediente" name="expediente3"  id="curpF2"     >

                <label for="susbcribe2" class="label"id="label2"> -Registrar una cuarta sentencia:
           
           <input type="checkbox" name="subscribe2" id="CheckBene2"  class="check">
                  
                  </label>
                <input type="text"   style="border: 3px solid orange ;background-color:#FFEBCA" placeholder="Numero de oficio" name="numeroOficio4"  id="nombreFamiliar3"> 
                <input type="text"  style="border: 3px solid orange ;background-color:#FFEBCA" placeholder="Nombre del actor" name="nombre4" id="parentesco3"    > 
                <input type="text"  style="border: 3px solid orange ;background-color:#FFEBCA" placeholder="Expediente" name="expediente4"  id="curpF3">
       

<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>