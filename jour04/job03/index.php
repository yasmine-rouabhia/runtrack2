<?php
var_dump($_POST);
$compteur = 0;
foreach($_POST as $key => $value){
    // echo $value."<br/>";
    $compteur++;
    
}

echo $compteur;

?>

<form action="index.php" method="post">
    <label for="name">Nom</label>
    <input type="text" id="name" name='name' placeholder="Votre nom">
    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="votre prénom"><br>
    <label for="email">Email</label>
    <input type="text" id="namet" name='email' placeholder="Votre email">
    <input type="submit" name='submit' value="valider">
</form>