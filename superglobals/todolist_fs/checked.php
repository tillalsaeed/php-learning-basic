<?php


$delete = file_get_contents('todo.json');
$jsonArray = json_decode($delete, true);
$delete_item = $_POST['change_todo'];


$jsonArray[$delete_item]['completed'] = !$jsonArray[$delete_item]['completed'];

file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location:index.php');