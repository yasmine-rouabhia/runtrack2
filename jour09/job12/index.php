<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, "SELECT * FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");

$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etudiants);

?>

<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf-8">
</head>
<body>
    <h1>Tableaux Etudiants</h1>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($etudiants as $etudiant){
                    echo '<tr><td>'.$etudiant['prenom'].'</td>';
                    echo '<td>'.$etudiant['nom'].'</td>';
                    echo '<td>'.$etudiant['naissance'].'</td></tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>