<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
</head>
<body>
    <!-- Syntax Php -->

    <?php
    //   Declare Number
         $a = 5;
         $b = 10;
         $c = 12;
    //   Arthimatic Operater
    echo $a + $b . "</br>";
    echo $a * $b . "</br>";
    echo $a / $b . "</br>";
    echo $a - $b . "</br>";
    echo $a % $b . "</br>";
    // Assignment with math Operators
    $a += $b; echo $a. "</br>";
    $a -= $b; echo $a. "</br>";
    $a *= $b; echo $a. "</br>";
    $a /= $b; echo $a. "</br>";
    $a %= $b; echo $a. "</br>";
    // Increment operator
    $a++; // 6
    ++$a;  
    // Decrement operator
    $a--;
    --$a;
    // Number checking functions
    is_float(4.1);
    is_integer($a);
    is_numeric($a); 
    // Conversion
    $strNumber = '12.23';
    $number = floatval($strNumber);
    $number = intval($strNumber);
    $number = bolval($strNumber);
    // Number functions
    
    abs();
    pow();
    sqrt();
    max();
    min();
    round();
    floor();
    ceil();

    // Formating numbers
     $number = 1234423123.12345;
     echo number_format($number, 2, '.',','). "</br>";


    //https://www.php.net/manual/en/function.math.php
    ?>

</body>
</html>