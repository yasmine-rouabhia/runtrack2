<?php

$tab = array('Yasmine', 'Rouabhia', 'Codeuse', 'Féminine', 'Bonjour');
$count = count($tab);
echo "<pre>";
function bubblesort($croissant){
    for($i = 0; $i < $count; $i ++){
        for($j = $i + 1; $j < $count; $j ++){
            if($tab[$i] > $tab[$j]){
                $ordre = $tab[$i];
                $tab[$i] = $tab[$j];
                $tab[$j] = $ordre;
                    return;
            }
        }
    }     
}  
var_dump($tab);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau en ordre</title>
</head>
<body>
    <h1>Tableaux par ordres</h1>
        <table>
            <thead>
                <tr>
                    <th>Ordre Croissant</th>
                    <th>Ordre Décroissant</th>
                </tr>
            </thead>
        <tbody>
            <?php
            echo " Sorted Array:";
            print_r($tab);            

            ?>
        </tbody>
</body>
</html>





