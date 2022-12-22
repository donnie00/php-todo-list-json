<?php

$tasks = file_get_contents('../tasksList.json');

// $tasks = json_decode($tasks, true);

header("Content-Type: application/json");

echo $tasks;
