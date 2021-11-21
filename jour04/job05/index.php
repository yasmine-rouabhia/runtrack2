<?php
// var_dump($_POST);

if($_POST['username']== "John" && $_POST['passeword']== "Rambo"){
    echo "C'est pas ma guerre";
}
else{
echo "Votre pire cauchemar";
}

    

?>

<form action="index.php" method="post">
    <label for="name">Username</label>
    <input type="text" id="username" name='username' placeholder="Votre nom d'utilisateur">
    <label for="prenom">Passeword</label>
    <input type="text" id="passeword" name="passeword" placeholder="Votre mot de passe"><br>
    <input type="submit" name='submit' value="valider">
</form>