<?php

if (empty($_POST['id'])) {
   http_response_code(400);

   exit('Id non valido!');
}

$tasks = file_get_contents('../tasksList.json');

$tasks = json_decode($tasks, true);


$index;

foreach ($tasks as $i => $task) {

   if ($task['id'] === $_POST['taskId']) {
      $index = $i;
   }
};

array_splice($tasks, $index, 1);


$tasksJson = json_encode($tasks, JSON_PRETTY_PRINT);

file_put_contents('../tasksList.json', $tasksJson);

header("Content-Type: application/json");
