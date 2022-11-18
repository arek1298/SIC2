<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_GET['id'];
if($id>0){
  $result = $objDB->Execute("SELECT * FROM crud_employees WHERE id=$id");
  $employee = $result->fetch_assoc();
}
?>

  <form id="frmEmployee" class="form">
    <input type="hidden" name="id" value="<?= $id ?>" />
    <label>
      Nombre
      <input type="text" name="nombre" value="<?php if(isset($employee)) echo $employee['nombre'] ?>" required />
    </label>
    <label>
      Cargo:
      <input type="text" name="cargo" value="<?php if(isset($employee)) echo $employee['cargo'] ?>" />
    </label>
    
    
    <button class="button" type="submit">Guardar datos</button>
  </form>
  <a class="hideForm" href="#">Cerrar</a>
