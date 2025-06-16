<?php
    //index array
    
    /*
    $fruits = ["Apple", "Banana", "cherry"];
    echo "{$fruits[0]} <br><br>";

    var_dump($fruits);
    echo "<br>";

    $fruits[3] = "peach";

    var_dump($fruits);
            */

    
    
    //Associative Array (i.e Key Value Pair) with foreach loop
    /*

    $user = [
        "name" => "Jaleed khan",
        "id" => 123,
        "age" => 23,
        "address" => "Peshawar"
    ];

    foreach($user as $key => $value){
        echo $key . " - " . $value . "<br>";
    }
    */

    //Add to array

    $fruits = ["Apple","Banana","peach"];
    
    array_push($fruits, "Grape","Blueberry","Strawberry");
    array_unshift($fruits,"Mango");

    //remove from array
    array_pop($fruits); // this fun del the element from the last end.
    array_shift($fruits); // this fun del from the start.

    // unset($fruits[2]); // this fun del the at a specific index and also del the index.

    //split into 2 chunk
    array_chunk($fruits,2); // this fun split array into 2 chunk.

    print_r($fruits);
    ?>