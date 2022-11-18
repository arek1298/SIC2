<?php
session_start();
include 'php/conexion.php';
include 'noSesion.php';
echo $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/style2.css">
    <script src="js/jquery.js "></script>
    <script src="js/cargar.js "></script>
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
<img src="img/logo.png" alt="">
<h1>Alta de deudo</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>

        
        </div>


<br><br><br>

<div class="respuesta">
<br>
<h2 value="">ALTA DE DEUDO <h2 style="color:blue"></h2></h2>
<form action="pdf4.php" method="post"  >
<br>

           
                <h3>Escribe los datos  </h3><BR>

                <label>Tipo de alta:</label>
            <select name="tipodealta" id="tipo de alta">
           <option value="Pensionado">Pensionado</option>
           <option value="Trabajador">Trabajador</option>
           </select>
           <label>Tipo de regimen:</label>
            <select name="tipoderegimen" id="tipoderegimen">
           <option value="Decimo transitorio">Decimo transitorio</option>
           <option value="Ordinario">Ordinario</option><br>
           </select>

               


            
            
                
            <label>Nombre del fallecido:</label>
                <input type="text" placeholder="NOMBRE DEL FALLECIDO" name="nombreFallecido" style="text-transform:uppercase" required>
                <label>Numero del issste:</label>
                <input type="number" placeholder="NUMERO DE ISSSTE" name="nIssste" style="text-transform:uppercase" required>  
                <label>Escribe la CURP:</label>
                <input type="text" placeholder="CURP" name="curp" minlength="18" maxlength="18" required> 
                <label>Nombre del familiar a registrar</label>
                <input type="text" placeholder="NOMBRE DEL FAMILIAR A REGISTRAR" name="nombreFamiliar" required > 
                <label>Parentesco</label>
                <input type="text" placeholder="PARENTESCO" name="parentesco" required> 
                <label>CURP DEL FAMILIAR A REGISTRAR</label>
                <input type="text" placeholder="CURP DEL FAMILIAR A REGISTRAR" name="curpF" minlength="18" maxlength="18" size="10" required>

              
                
                <label for="susbcribe" class="label"> -Registrar un segundo beneficiario:
           
           <input type="checkbox" name="subscribe" id="CheckBene"  class="check" >
                  
                  </label>
               <input type="text" style="border: 3px solid blue ;background-color:#CAD6FF" placeholder="NOMBRE DEL FAMILIAR A REGISTRAR" name="nombreFamiliar1" id="nombreFamiliar1" > 
                <input type="text" style="border: 3px solid blue ;background-color:#CAD6FF" placeholder="PARENTESCO" name="parentesco1" id="parentesco1"                > 
                <input type="text" style="border: 3px solid blue ;background-color:#CAD6FF" placeholder="CURP DEL FAMILIAR A REGISTRAR" name="curpF1"  id="curpF1"  minlength="18" maxlength="18" size="10"        >



                <label for="susbcribe1" class="label"id="label"> -Registrar un tercer beneficiario:
           
           <input type="checkbox" name="subscribe1" id="CheckBene1"  class="check">
                  
                  </label>
                <input type="text"  style="border: 3px solid green  ; background-color:#E0FFCA" placeholder="NOMBRE DEL FAMILIAR A REGISTRAR" name="nombreFamiliar2" id="nombreFamiliar2"  > 
                <input type="text" style="border: 3px solid green ; background-color:#E0FFCA"  placeholder="PARENTESCO" name="parentesco2" id="parentesco2"     > 
                <input type="text"  style="border: 3px solid green ; background-color:#E0FFCA" placeholder="CURP DEL FAMILIAR A REGISTRAR" name="curpF2"  id="curpF2"   
       minlength="18" maxlength="18" size="10"      >

                <label for="susbcribe2" class="label"id="label2"> -Registrar un cuarto beneficiario:
           
           <input type="checkbox" name="subscribe2" id="CheckBene2"  class="check">
                  
                  </label>
                <input type="text"   style="border: 3px solid orange ;background-color:#FFEBCA" placeholder="NOMBRE DEL FAMILIAR A REGISTRAR" name="nombreFamiliar3"  id="nombreFamiliar3"> 
                <input type="text"  style="border: 3px solid orange ;background-color:#FFEBCA" placeholder="PARENTESCO" name="parentesco3" id="parentesco3"    > 
                <input type="text"  style="border: 3px solid orange ;background-color:#FFEBCA" placeholder="CURP DEL FAMILIAR A REGISTRAR" name="curpF3"  id="curpF3"
                
       minlength="18" maxlength="18" size="10" >
       

<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>