<?php

$todoName = $_POST['todo_item'] ?? '';

$todoName = trim($todoName);


if(isset($todoName)){
    if(file_exists('todo.json')){
    $json = file_get_contents('todo.json');
    $jsonArray = json_decode($json, true);
    } else {
        $jsonArray = [];
    }
    $jsonArray[$todoName] = ['completed' => false];
    

    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

    header("Location: index.php");

}
