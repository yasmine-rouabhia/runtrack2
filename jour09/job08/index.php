<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT SUM(capacite) AS 'capacite_totale' FROM salles ");

$salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);
var_dump($salles);

?>

<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf-8">
</head>
<body>
    <h1>Tableaux de capacité total des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Capacité totale</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($salles as $salle){
                    echo '<tr><td>'.$salle['capacite_totale'].'</td></tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>

