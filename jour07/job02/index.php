<?php
var_dump($_COOKIE);
$_coockie_name = "nbvisites";
$_coockie_value = 1 ;
echo($_COOKIE["nbvisites"])."</br>";

 setcookie('nbvisites', 0);
setcookie($_coockie_name, $_COOKIE["nbvisites"] +1,time()+ 86400 * 30); //86400 = 1 jours
echo($_COOKIE["nbvisites"]);
if(isset($_POST["reset"])){
    unset($_COOKIE["nbvisites"]);
    setcookie('nbvisites', 0);

    header("Location:index.php");
}

if(!isset($_COOKIE)){
    echo "etst";
}

?>

<html>
<head>
<title>Nombre de visite</title>
</head>

<body>
<p>Nombre de visite <?php echo($_COOKIE["nbvisites"]); ?></p>
<form action="index.php" method="post">
    <input type="submit" name="reset" value="reset">
</form>
</body>
</html>


