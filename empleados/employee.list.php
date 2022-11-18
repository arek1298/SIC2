<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$result = $objDB->Execute('SELECT * FROM crud_employees');

while($employee = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?= $employee['nombre'] ?></td>
    <td><?= $employee['cargo'] ?></td>
    
    
    <td>
      <button class="edit">EDITAR<a class="" data-id="<?= $employee['id'] ?>" href="#"></a></button>
      <button class="delete">ELIMINAR<a class="" data-id="<?= $employee['id'] ?>" href="#"></a></button>
    </td>
  </tr>
  <?php
}
?>
