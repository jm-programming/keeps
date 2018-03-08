
new Vue({
	el:'#keep',

	//se ejecuta cuando se llama la clase
	created: function() {
		this.getKeeps();
	},

	//Atributos
	data:{
		keeps:[],
		newKeep: '',
		errors:[],
		fillKeep:{ 'id': '', 'keep': ''},
	},

	//Metodos 
	methods: {
		//Obtener Tareas
		getKeeps: function(){
			let urlKeeps = "tasks";

			axios.get(urlKeeps).then(response => {
				this.keeps = response.data
			});
		},

		//Borrar Tareas
		deleteKeep: function(keep) {
			let url = "tasks/" + keep.id;

			axios.delete(url).then(response => {
				this.getKeeps();
				toastr.success('Tarea Eliminada');
			});
			
		},

		//crear tareas
		createKeep : function(){
			let url = 'tasks';

			axios.post(url , {
				keep: this.newKeep
			}).then(response => {
				this.getKeeps();
				this.newKeep = '';
				this.errors = [];
				$('#create').modal('hide');
				toastr.success('Creado Correctamente');

			}).catch(error => {
			 	this.errors = error.response.data
			});
		},

		//editar Tarea
		editKeep: function(keep){
			this.fillKeep.id = keep.id;
			this.fillKeep.keep = keep.keep;
			$('#edit').modal('show');
		},
		

		//actualizar tarea
		updateKeep: function(id){
			let url = "tasks/" + id;

			axios.put(url , this.fillKeep).then(response => {
				this.getKeeps();
				this.fillKeep = {'id': '', 'keep': ''};
				$('#edit').modal('hide');
				toastr.success('Editado con exito...');
			}).catch(error => {
				this.errors = error.response.data
			});
		},

	}
	
});



