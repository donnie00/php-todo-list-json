const {createApp} = Vue;

createApp({
	//Inserisci qui i dati
	data() {
		return {
			tasks: [],
			newTask: {
				text: '',
				done: false,
				id: '',
			},
		};
	},
	//inserisci qui le tue funzioni
	methods: {
		fetchTasks() {
			axios.get('api/readTasksArray.php').then((resp) => {
				this.tasks = resp.data;
			});
		},

		resetInput() {
			this.newTask.text = '';
		},

		onTaskAdd() {
			axios
				.post('api/createNewTask.php', this.newTask, {
					headers: {'Content-Type': 'multipart/form-data'},
				})
				.then((resp) => {
					this.fetchTasks();

					this.resetInput();
				})
				.catch((error) => {
					alert(error.response.data);
				});
		},

		onTaskDelete(taskId) {
			axios
				.post(
					'api/deleteTask.php',
					{taskId},
					{
						headers: {'Content-Type': 'multipart/form-data'},
					}
				)
				.then((resp) => {
					this.fetchTasks();
				})
				.catch((error) => {
					alert(error.response.data);
				});
		},
	},

	mounted() {
		this.fetchTasks();
	},
}).mount('#app');
