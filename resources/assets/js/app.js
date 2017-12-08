new Vue({
	el:'#crud',

	created: function() {
		this.getKeeps();
	},

	data:{
		keeps:[],
		newKeep: '',
		errors:[],
		fillKeep:{ 'id': '', 'keep': ''}
	},


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
			this.fillKeep = {'id': keep.id, 'keep': keep.keep};
			$('#edit').modal('show');
		},
		

		//actualizar tarea
		updateKeep: function(){
			
		},

	}
	
});

