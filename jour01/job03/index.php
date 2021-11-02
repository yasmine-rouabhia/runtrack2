<?php
$bool = true; // Booléen 
$val = 3; // Valeur Entier
$str = "Hello my tableau"; // Chaine de caractères
$a = 1.5; // Normbre à virgule
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
           <th>Type</th>
           <th>Nom</th>
           <th>Valeur</th>
        </thead>
        <tbody>
            <tr>
                <td>Booléen</td>
                <td>$bool</td>
                <td><?php echo $bool ?></td>
            </tr>
            <tr>
                <td>Entier</td>
                <td>$val</td>
                <td><?php echo $val ?></td>
            </tr>
            <tr>
                <td>Chaîne de caractères</td>
                <td>$str</td>
                <td><?php echo $str ?></td>
            </tr>
            <tr>
                <td>Nombre à virgule flottante</td>
                <td>$a</td>
                <td><?php echo $a ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>