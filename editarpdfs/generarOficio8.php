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
    
    </script>
<body>

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
<h2 value="">EDITAR DESIGNACION DE BENEFICIARIOS<h2 style="color:blue"></h2></h2>
<form action="pdf11.php" method="post">
<br>

           
                <h3>Escribe los datos:  </h3><BR>
                <Label>Nombre del Pensionario:</label>
                <input type="text" placeholder="NOMBRE DEL PENSIONARIO:" name="nombre" required><br>
               <label>RFC</label>
                <input type="text" placeholder="RFC:" name="rfc" required
       minlength="10" maxlength="13" size="10"><br>
       <label>Numero del pensionista</label>
                  <input type="text" placeholder="NUMERO DE PENSIONISTA:" name="numP" required
       minlength="4" maxlength="8" size="10" ><br>
       <label>Seguro de vida institucional de:</label>
       <select name="meses" id="meses" required>
  <option value="18">18</option>
  <option value="22">22</option>
  <option value="39">39</option>
  <option value="56">56</option>
  <option value="73">73</option>
  <option value="90">90</option>
</select><br>
<Label>Concepto::</label>
                <input type="text" placeholder="CONCEPTO:" name="concepto" required><br>
                <label>Cantidad:</label>
                <input type="number" placeholder="CANTIDAD" name="can1" step="0.01" required> <br>
                <label>Fecha de Fallecimiento:</label>
                <input type="date" placeholder="FECHA DE FALLECIMIENTO" name="fecha" required> <br>
               

<button  type="submit"name="enviar" >Continuar</button>
</form>
<br><br>

</div>



</body>

</html>