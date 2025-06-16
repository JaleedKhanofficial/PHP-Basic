<?php
//simple Function

/*
function sayHello(){
    echo "Hello Php";
}
sayHello();
*/

//With Parameter
/*
function greet($name){
    echo "Hello {$name} <br>";
}
greet("Jaleed");
greet("khan");
*/

//Parameter Default Value

/*
function greet($name="Khan") {
    echo "Hello, $name <br>";

}

greet(); 
greet("Jaleed");

*/

// return from function 

function multi($x , $y){
    return $x * $y;
}
$result=multi(5,6);
echo "Result is $result";

?>