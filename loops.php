<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Loops::</title>
</head>
<body>

<?php

// While loop

$counter = 0;



 while($counter < 10){
    echo "Counter is $counter";
    if($counter > 5){
        break;
    }


    $counter++;
 }

//  do While

$counter = 10;
 do{
    echo "Counter is $counter";
 } while($counter < 10);

 // for loop

 for ($i = 0; $i < $counter; $i++) {
    echo $i;
 }

//  foreach

$furits = ["banana", "orange", "mango"];

foreach ($furits as $key => $value) {
    echo $key . $value;
}

// Iteration over assosiated arrays

$person = [
    'name' => 'Brad',
    'surname' => 'Travesry',
    'age' => 30,
    'hobbies' => ['Tennis', 'Cricket', 'Games'];
]

foreach ($person as $key => $value) {
    if($key === "hobbies") break;
    echo $value;
}

?>

    
</body>
</html>