<!DOCTYPE html>
<html lang="it">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Php To-do</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body class="text-bg-dark">

   <div id="app">

      <div class="row justify-content-center">
         <div class="col-4">
            <h1 class="my-3 display-3">To-do Php</h1>
            <ul v-if="tasks.length > 0" class="list-group mb-3">
               <li v-for="(task, i) in tasks" :key="i" class="list-group-item d-flex align-items-center justify-content-between">
                  <span>{{task.text}}</span>
                  <button class="btn btn-danger" @click="onTaskDelete(task.id)">&cross;</button>
               </li>
            </ul>

            <div v-else class="card p-3">
               <h3 class="text-dark">Nessuna task da visualizzare, prova ad aggiungerne una scrivendola qui sotto!</h3>
            </div>

            <form @submit.prevent='onTaskAdd'>
               <div class="input-group my-3">
                  <input class="form-control" type="text" v-model="newTask.text">
                  <button class="btn btn-outline-warning">Add task</button>
               </div>
            </form>
         </div>
      </div>

   </div>

   <script src="./main.js"></script>
</body>

</html>