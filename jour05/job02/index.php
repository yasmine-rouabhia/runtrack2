<?php

function bonjour($jour){
    if($jour === true){
        echo 'Bonjour'; 

    }
    elseif($jour === false){
        echo 'Bonsoir';
    }
    else{
        echo 'Se n\'est pas un booléen'; 
    }
}
bonjour(false);
bonjour(true);
?>