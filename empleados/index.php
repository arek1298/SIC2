<html>
  <head>
    <title>CORRESPONDENCIA</title>
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
  	<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
    <div class="gridtop">
<img src="../img/logo.png" alt="">
<h1>Sistema de correspondencia</h1>

<br>
<h3>Delegacion coahuila <br>
        Subdelegacion de prestaciones   <br>
        Departamento de pensiones <br>
        </h3>
        
</div>
    <div class="bg"></div>
    <div class="block">
      <a class="button showForm" href="#">Nuevo empleado</a><br>
    <button><a href="../admin.php" class="reg">Regresar</a><br></button>
    <br>
    <br>
      <table id="table" class="tables">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Cargo</th>
           
            
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="listEmployees">
          <?php include_once 'employee.list.php' ?>
        </tbody>
      </table>
    </div>
    <div class="modalFrmEmployee"></div>
  </body>
  <script src="funcs.js"></script>
</html>
