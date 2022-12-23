<?php

$tasks = file_get_contents('../tasksList.json');

header("Content-Type: application/json");

echo $tasks;
