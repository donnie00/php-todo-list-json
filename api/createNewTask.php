<?php

if (empty($_POST['text']) || $_POST['text'] === ' ') {
   http_response_code(400);

   exit('Input non valido!');
}

$tasks = file_get_contents('../tasksList.json');

$tasks = json_decode($tasks, true);

$taskToAdd = [
   'text' => ucfirst($_POST['text']),
   'done' => false,
   'id' => uniqid()
];

$tasks[] = $taskToAdd;

$tasksJson = json_encode($tasks, JSON_PRETTY_PRINT);

file_put_contents('../tasksList.json', $tasksJson);

header("Content-Type: application/json");

echo json_encode($taskToAdd);
