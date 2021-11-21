<?php
session_start();

if(isset($_POST["reset"])){
    session_destroy();
    header("Location:index.php");
}

var_dump($_SESSION);
if (!isset( $_SESSION['nbvisites']))

$_SESSION['nbvisites'] = 1; 

else $_SESSION['nbvisites']++;

?>

<html>
<head>
<title>Nombre de visite</title>
</head>

<body>
<p>Nombre de visite <?php echo( $_SESSION['nbvisites'] ); ?></p>
<form action="#" method="post">
    <input type="submit" name="reset" value="reset">
</form>
</body>
</html>
