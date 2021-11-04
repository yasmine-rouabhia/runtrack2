<?php

for($i = 2; $i <= 1000; $i ++){
    for($j = 1; $j <= $i; $j ++){

        if($i % $j == 1){
        }
        elseif($i % $j == 0){
            echo $i .'<br />';    
        }     
    }
}
?>