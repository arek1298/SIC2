<!-- Editar -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	 <center><h4 class="modal-title" id="myModalLabel">Editar miembro</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Usuario:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>">
					</div>
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cargo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cargo" value="<?php echo $row['cargo']; ?>">
					</div>
				</div>
				<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">RFC:</label>
					</div>
				<div class="col-sm-10">
						<input type="text" class="form-control" name="rfc" value="<?php echo $row['rfc']; ?>">
					</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Contrasena:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contrasena" value="<?php echo $row['contrasena']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Permisos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="permisos" value="<?php echo $row['permisos']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Borrar miembro</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estas seguro en borrar los datos de?</p>
				<h2 class="text-center"><?php echo $row['usuario']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
