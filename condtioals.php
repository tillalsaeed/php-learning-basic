<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Conditionals:::</title>
</head>
<body>
    <?php

    $age = 25;
    $name = "Tillal";

    // if condition
      if($age === 25){
        echo "I am 25 Years old";
      }


    // if else condition

    if($age === 25){
        echo "I am 25 Years old";
      } else {
        echo "I am not 25 Years old";
      }

    // if condition 1 OR condition 2

    if($age === 25 || $name === "Tillal"){
        echo "I am 25 Years old and i am Tillal";
      }

    // if condition 1 ELSEIF condition 2 ELSE

    if($age === 25 && $name == "Billal"){
        echo "I am 25 Years old and i am Tillal"; 
    }

    //if condition 1 and condition 2 elseif condition 1 and condition2  else

    // Ternary operation

    ($age < 22) ? 'Young' : ($age < 30 ? 'Not Young NOT OLD' : 'old');

    // Null coalescing operation
     $myAge = $age ? $age : 18;

     echo $myAge;

     // 7.1 
     $myAge = $age ?: 18;

    //Null coalescing assginmet operation

    $myAddress = isset($address) ? $address : 'Current loaction';
    $myAddress = $address ?? 'Current loaction';
    
    echo $myAddress;


    // swtich

?>
</body>
</html>