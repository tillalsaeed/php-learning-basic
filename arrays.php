<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:::Arrays:::</title>
</head>
<body>
   
        <?php

        // Create Arrays
        $data = ["Tillal", "Billal", "Waqas"];
        // Print the whole array
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        // Set elements by index
        echo $data[0];
        $data[0] = "Billa";  
        // Check if array has elements at index 2
          var_dump(isset($data[2])); // true
        // Append elements
        $data[] = "peach";

        // Print the length of the array
        echo count($data);
        // Add Elements in the end of the array
        array_push($data, "waqar");
        // Remove elements in the end of the array
        array_pop($data);
        // Add Elements in the beginning of the array
        array_unshift($data, "waqar");
        // Remove elements in the beginning of the array
        array_shift($data);
        // Split the string into array elements
        $furits = "Banana, Apple, Oranges, Peach";
        explode(",", $furits);
        // Combine Array elements into string
        implode("&", $furits);

        // Check if elements array in exisiting
        in_array("Apple", $furits);
        // Search eletemt index in array
        array_search("Apple", $furits);
        // Merge two arrays
        $vegitables = ["Iceburg"];

            var_dump([...$furits, ...$vegitables]);
        // Sorting of Arrays
        sort($vegitables);
        rsort($vegitables); // reverse sorting
        // Filter, map, reduce of array
        $numbers = [1,2,3,4,5,6,7,8,9,10,11];
         $even = array_filter($numbers, fn($n) => $n % 2 === 0);
         var_dump($even);
        //  Map
        $squares = array_map(fn($n) => $n * $n, $numbers);

        //  ArraY Reduce
        $reduce = array_reduce($numbers, fn($carry, $item) => $carry + $item);
        var_dump($reduce);
        
        // https://php.net/manual/en/ref.array.php

        /*
        -------------------------------
           Assosiated Arrays
        -------------------------------
        */

        $person = [
            "name" => 'John',
            "surname" => 'Doe',
            'age' => 36,
            'hobbies' => ["Cricket", "Video Game"]
            
        ]

        // Set Element by Keys
        $person["channel"] = 'Travesy Media';
        // Get Element by Keys
        $person["name"]
        // CHECK IF ARRAY HAVE specific key
        isset($person["channel"]);
        // prints the key of the elements
        array_keys($person);
        // print values of the elements
        array_values($person);
        // Sorting assositive arrays by key and values
        ksort($person); // sort by keys
        krsort($person); // sort by reverse keys
        asort($person); // sort by values
        // Two dimensional arrays

        $todoItems = [
            ["title" => "item 1", completed="false"],
            ["title" => "item 2", completed="true"],
            ["title" => "item 3", completed="false"],
            ["title" => "item 4", completed="true"],
        ]


        // Null coalescing assginment operator

        $person = [

        ];

        if(!isset($person['name'])){
             $person['name'] = "Tillal";
        }

        $person['name']??= "Anonymous";

        // Swtich

    $userRole = 'admin';

    switch ($userRole){
        case 'admin': 
            echo "You are admin";
            break;
            case 'user': 
                echo "You are a user";
                break;
                default: 
                echo "Unknown role";
    }

        
        ?>

        
    
    
</body>
</html>