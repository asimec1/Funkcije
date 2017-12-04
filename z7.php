<?php session_start(); $Z=7;
 $_SESSION["Z"]=$Z;?>
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <title>ntpws 2015 - Nenad Barbutov - 
<?php echo $Z; ?>. zadatak</title>
 </head>
<body>
<h2> Zadatak <?php echo $Z; ?>.</h2>

<?php echo 'sekundi proteklo od ponoći: '. time() % 86400 
// na serveru, dakako
?>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>