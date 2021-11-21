<?php

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd, " SELECT * FROM etudiants WHERE sexe = 'Femme' ");

$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

// var_dump($etudiants);

?>

<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf-8">
</head>
<body>
    <h1>Tableaux Etudiant Féminin</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Sexe</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($etudiants as $etudiant){
                    echo '<tr><td>'.$etudiant['nom'].'</td>';
                    echo '<td>'.$etudiant['prenom'].'</td>';
                    echo '<td>'.$etudiant['naissance'].'</td>';
                    echo '<td>'.$etudiant['sexe'].'</td></tr>';
                    
                }
            ?>
        </tbody>
    </table>
</body>
</html>








