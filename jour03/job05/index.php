<?php
        $str = "On n est pas le meilleur quand on le croit mais quand on le sait"; 
        $dic = 'aeiouyAEIOU';
        $dic1 = 'bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ';
        
        // Affichage des voyelles
        echo '<b>Affichage des voyelles</b><br>' ;
        $compvoye = 0; // compteur de voyelle
        for($a = 0; isset($str[$a]); $a ++){ // pour chaque boucle comptage des voyelles
            
            for($b = 0; isset($dic[$b]); $b ++){
                if($str[$a] == $dic[$b]){
                $compvoye ++ ;    
                echo $str[$a];
                }
            }
        }
        echo '<br>';

        // Affichage des consonnes
        echo '<b>Affichage des consonnes</b><br>' ;
        $compcon = 0; // compteur de consonne
        for($c = 0; isset($str[$c]); $c ++){
            
            for($d = 0; isset($dic1[$d]); $d ++){// pour chaque boucle comptage des consonnes
                if($str[$c]== $dic1[$d]){
                $compcon ++ ;
                echo $str[$c];   
                }  
            }
        }
    ?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
           <th>Voyelles</th>
           <th>Consonnes</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $compvoye ;?></td> 
                <!-- afficher le nombre total de voyelle -->

                <td><?php  echo $compcon ;?></td> 
            </tr>                                       
            <!-- affiche le nombre total de consonnes -->

        </tbody>
    </table>
</body>
</html>
