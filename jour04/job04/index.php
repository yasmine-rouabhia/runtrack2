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
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // var_dump($_POST);
                $compteur = 0;
                    foreach($_POST as $key => $value){
                        echo $key .' ' .$value."<br/>";
                            $compteur++;
                                }?>
               
        
        </tbody>
    </table>
<form action="index.php" method="post">
    <label for="name">Nom</label>
    <input type="text" id="name" name='name' placeholder="Votre nom">
    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="votre prénom"><br>
    <label for="email">Email</label>
    <input type="text" id="namet" name='email' placeholder="Votre email">
    <input type="submit" name='submit' value="valider">
</form>
</body>
</html>   