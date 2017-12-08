

<form method="POST" v-on:submit.prevent="updateKeep(fillKeep.id)">
  <!-- Modal -->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Editar</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="keep">Editar Tarea</label>
          <input type="text" name="keep" class="form-control" v-model="fillKeep.keep"> 
          </div>
        </div>
        <span v-for="error in errors"> @{{ error }}</span>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
</form>