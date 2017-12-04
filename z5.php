<?php session_start(); $Z=5;
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

Ispisuje ispremješano riječi iz ulaznog niza.<br><br>
Ulazni niz: <input type="text" name="ulaz" size="80" value=
 "vidjeh jednu zakučastu php_funkciju"> <br><br>
 <input type="submit" value="ispremješaj riječi">
 <input type="number" name="n" value="4"> puta


</form>

<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>