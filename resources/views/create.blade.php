<form method="POST" v-on:submit.prevent="createKeep">
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Nueva tarea</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="keep">Tarea</label>
          <input type="text" name="keep" class="form-control" v-model="newKeep"> 
          </div>
        </div>
        <span v-for="error in errors"> @{{ error }}</span>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>