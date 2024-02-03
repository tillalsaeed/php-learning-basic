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
       echo "Hello World"; 
       // Single Comments
       /* Multiple Cooments */
       # Another Single Line Comment

    // What is variable
    /**
     *  String
     * Integer
     * Float
     * Boolean
     * Null
     * Array
     * Object
     * Resource
     */
       

    // Variable Types
    // Declare variables
    $str = "Tillal Saeed";
    $int = 31;
    $flot = 31.7;
    $boolean = true;
    $null = null;
    // Print the variable
    // Print whole variable
    var_dump($str);
    // Print the type of variable
    gettype($str);
    // Variable checking functions
    is_string($str); // true;
    // Check if variable is defined
    isset($address); // false;
    isset($str); // true;
    isset($null); // false;

    // Constants
    define('PI', 3.14);
    echo PI; // we dont use dollar sign to use define constants

    // check if constant is defined or not we use
    defined('PI'); // true


    // Using Php builtin constants
     
    echo PHP_INT_MAX; //

    ?>

</body>
</html>