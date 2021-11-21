<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT AVG(capacite) AS 'moyenne_capacite' FROM salles ");

$salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);

// var_dump($etudiants);

?>

<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf-8">
</head>
<body>
    <h1>Tableaux des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Capacite moyenne</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($salles as $salle){
                    // echo '<tr><td>'.$salle['nom'].'</td>';
                    // echo '<td>'.$salle['id_etage'].'</td>';
                    echo '<td>'.$salle['moyenne_capacite'].'</td></tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>