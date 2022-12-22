<?php

include __DIR__ . "/api/readTasksArray.php";

?>

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
            <h1 class="my-3">To-do Php</h1>
            <ul class="list-group mb-3">
               <li class="list-group-item d-flex align-items-center justify-content-between">
                  <span>HTML</span>
                  <button class="btn btn-danger">&cross;</button>
               </li>
               <li class="list-group-item d-flex align-items-center justify-content-between">
                  <span>HTML</span>
                  <button class="btn btn-danger">&cross;</button>
               </li>
               <li class="list-group-item d-flex align-items-center justify-content-between">
                  <span>HTML</span>
                  <button class="btn btn-danger">&cross;</button>
               </li>
               <li class="list-group-item d-flex align-items-center justify-content-between">
                  <span>HTML</span>
                  <button class="btn btn-danger">&cross;</button>
               </li>
               <li class="list-group-item d-flex align-items-center justify-content-between">
                  <span>HTML</span>
                  <button class="btn btn-danger">&cross;</button>
               </li>
            </ul>

            <form action="">
               <div class="input-group mb-3">
                  <input class="form-control" type="text" name="taskText">
                  <button class="btn btn-outline-warning">Add task</button>
               </div>
            </form>
         </div>
      </div>

   </div>

   <script src="./main.js"></script>
</body>

</html>