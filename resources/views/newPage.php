<?
$ID=$_GET['ID'];
?>
<div class="modal-header">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h2 class="modal-title">Editar usuario</h2>
</div>
<form name="formularioModificaUsuario" method='post' action="usuarios.php">
    <div class="modal-body">
        <input type="text" class="form-control" name="idPlaza" id="a">
        <?php
            $valueA = $ID;
        ?>
    </div>
    <div class="modal-footer">
        <button type="reset" id="cancelar" class="btn btn-danger" data-dismiss="modal" value="reset">
         Cancelar</button>
        <button type="submit" name="submitModifica" id="submit" class="btn btn-primary" value="submit">
         Guardar cambios</button>
    </div>
</form>
