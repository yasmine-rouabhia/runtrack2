<?php

$var = 0;

for($var =1; $var <=100; $var ++){
    echo "<br>";
if(($var %3)&&($var %5)){
    echo "FizzBuzz";
}
elseif($var %3){
    echo "Buzz" ."<br>";
}
elseif($var %5){
    echo "Fizz" ."<br>";
}
}




?>