<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="utf-8">
    <title>Formulaire</title>
    <!-- <link rel="stylesheet" href="style1.css" type="text/css"> -->
</head>

<?php
var_dump($_POST);
    $StyleCourant = 'style par defaut' ;
    if(isset($_POST[ 'style' ])== true){

        switch( $StyleCourant = $_POST['style']) {
            case "style1":
                echo '<link rel="stylesheet" href="style1.css" type="text/css">';
            break ;
        
            case "style2":
                echo '<link rel="stylesheet" href="style2.css" type="text/css">';
            break ;
        
            case "style3":
                echo '<link rel="stylesheet" href="style3.css" type="text/css">';
            break ;
        
            default :
            break ;
        }
    }
    
?>

<body>    
    <thead>
        <h1>Style de Formulaire</h1>
    </thead>
        <header></header>
    <tbody>
</style>


<form action="index.php" method="post">
    <p>Style actuel : <?php echo $StyleCourant ;?></p>
<label for="choix-select">Choix du style formulaire:</label>
<select name="style" id="choix-select" size="1">
    <option value="">--Plusieurs styles--</option>
    <option id="style1 "name="style1" value="style1">Style 1</option>
    <option id="style2" name="style2"value="style2">Style 2</option>
    <option id="style3"name="style3"value="style3">Style 3</option>
</select>
<button type="submit" name="submit" value="valider">Valider</button>  
</form>        
    </tbody>
</body>
</html>


