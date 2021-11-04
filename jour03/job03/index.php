<?php
$tab = array("a", "e", "i", "o", "u", "y", "I");
$str = "I'm sorry Dave I'm afraid I can't do that";
for($a = 0; isset($str[$a])==true ; $a++){

    for($b = 0; isset($tab[$b])==true; $b++){

        if(($str[$a])==($tab[$b])){
            echo $str[$a];
        }
    }
}

?>