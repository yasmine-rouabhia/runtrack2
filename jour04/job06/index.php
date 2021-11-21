<form action="index.php" method="get">
    <input type="text" id="nombre" name='nombre' placeholder="Votre nombre">
    <input type="submit" name='submit' value="valider">
</form>
<?php
 // Déclaration da la variable tableau 
var_dump($_GET); 

    foreach($_GET as $key => $value){
     if($_GET['nombre'] %2 == 0){ // Déclarion des valeur %2
            echo $_GET['nombre']. "paire" . '<br />'; // Afficher mes variables paire
        }
        else{
           echo "impaire" . '<br />'; // Afficher mes variables impaire
        }     
    }
       
        
?>
