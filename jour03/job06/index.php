<?php

$str = "Les choses que l'on possede finissent par nous posseder"; 

for($x = 0; isset($str[$x]);$x ++);

for($x = $x -1; isset($str[$x])&& $x >= 0; $x-- ){
    echo $str[$x];    
    }  
?>