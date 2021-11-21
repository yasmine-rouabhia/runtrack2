<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT SUM(superficie) AS 'superficie_totale' FROM etage");


$etage = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etage);
?>

<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf-8">
</head>
<body>
    <h1>Superficie totale des étages</h1>
    <table>
        <thead>
            <tr>
                
                <th>superficie_totale</th>
            
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($etage as $etages){
                    echo '<tr><td>'.$etages['superficie_totale'].'</td></tr>';                  
                }
            ?>
        </tbody>
    </table>
</body>
</html>