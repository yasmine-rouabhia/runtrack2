<?php
$var = 0;

while($var < 100){
    $var ++;

    if($var <= 20){
     echo "<i>$var</i>". "<br>";
    }

    elseif($var == 42){
        echo "LaPlateforme". "<br>";
    }
    elseif(($var >=25)&&($var <=50)){
        echo "<u>$var</u>" ."<br>";
    }
    else{
        echo $var."<br>";
    }
}
?>