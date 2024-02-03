<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

<?php
// Functions with print hello world

function greetings(){
    echo "Hello World!";
}

greetings();

// Create sum of two number

function sum($a,$b){
    echo $a + $b;
}

sum(2,5);

// Creating function to sum all numbers using ...$nums
function sum(...$numbers){
    return array_reduce($numbers, fn($item, $add) => $item + $add);
    

}

echo sum(2,4,12,19,32,11);


// Arrow Functions
    
</body>
</html>