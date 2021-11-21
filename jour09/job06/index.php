<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, " SELECT COUNT(*) AS 'nb_etudiants' FROM etudiants ");


$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);

?>

<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf-8">
</head>
<body>
    <h1>Nombre d'étudiants</h1>
    <table>
        <thead>
            <tr>
                
                <th>nb_étudiants</th>
            
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($etudiants as $etudiant){
                    echo '<tr><td>'.$etudiant['nb_etudiants'].'</td></tr>';                  
                }
            ?>
        </tbody>
    </table>
</body>
</html>