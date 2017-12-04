<?php session_start(); $Z=6;
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

<form action= <?php echo "\"zadatak_" . $Z . ".php\""; ?>
 method="post" accept-charset="UTF-8">

<input type="submit" value="Ispiši">
 &nbsp; datume idućih <input type="number" name="n" size="2" value="-5"> subota


</form>

<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>