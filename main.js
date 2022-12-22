const {createApp} = Vue;

createApp({
	//Inserisci qui i dati
	data() {
		return {
			tasks: [],
		};
	},
	//inserisci qui le tue funzioni
	methods: {
		fetchTasks() {
			axios.get('api/readTasksArray.php').then((resp) => {
				this.tasks = resp.data;
			});
		},
	},

	mounted() {
		this.fetchTasks();
	},
}).mount('#app');
