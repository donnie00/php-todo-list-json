<?php

$tasksJson = file_get_contents('../tasksList.json');

$tasks = json_decode($tasksJson, true);

var_dump($tasks);
