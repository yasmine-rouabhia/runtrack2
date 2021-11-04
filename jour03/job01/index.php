<?php
$tab = array(98, 171, 173, 200, 204, 404, 459); // Déclaration da la variable tableau 

    for($x = 0; isset($tab[$x]); $x ++ ){ // Boucle de la commande du tableau  
        if($tab[$x]%2 == 0){ // Déclarion des valeur %2
            echo $tab [$x] . 'paire' . '<br />'; // Afficher mes variables paire
        }
        else{
            echo $tab [$x] . 'impaire' . '<br />'; // Afficher mes variables impaire
        }
    }

?>