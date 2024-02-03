<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    // Creating simple string
    $name = "Tillal Saeed";
    $name = 'Tillal Saeed';
    // String concatination
    $name . "</br>";
    // String functions
    strlen();
    trim(); // remove left and right side spaces
    ltrim(); // trim
    rtrim(); // trim
    str_word_count();
    strrev();
    strtoupper(); ///
    strtolower(); /// returns   
    ucfirst(); /// returns upper case first letter
    lcfirst(); /// returns lower case first letter
    ucwords(); /// uppercare all words
    strpos($name, "tillal");
    stripos($name, "tillal");
    substr($name, 8,3);
    str_replace('tillal',  'PHP', $name);
    str_ireplace('tillal', 'PHP', $name);

    // Multline text and line breaks
    // echo str_pad($name,  8, '0', STR_PAD_LEFT);
    // echo str_pad($name,  8, '0', STR_PAD_LEFT);
    // echo str_repeat('World', 3);
    // Multiline text and reserver html tags
    $longText = "Hello
    World
    Tillal
    Saeed";

    nl2br($longText);  // new line 2 br tag     
    htmlentities($longText);
    html_entity_decode();
    htmlspecialchars(); //
    // https://www.php.net/manual/en/ref.strings.php
    
    
    ?>
</body>
</html>