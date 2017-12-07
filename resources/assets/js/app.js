new Vue({
	el:'#crud',

	created: function(){
		this.getKeeps();
	},

	data:{
		keeps:[]
	},

	methods: {
		getKeeps: function(){
			let urlKeeps = "tasks";

			axios.get(urlKeeps).then(response => {
				this.keeps = response.data
			});
		},

		deleteKeep: function(keep) {
			let url = "tasks/" + keep.id;

			axios.delete(url).then(response => {
				this.getKeeps();
			});
			
		},
	}
	
});

