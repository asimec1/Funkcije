<?php session_start(); $Z=4;
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

Ispisuje uređeno riječi iz ulaznog niza.<br><br>
Ulazni niz: <input type="text" name="ulaz" size="80" value=
 "ove bi riječi trebale biti sortirane po abecedi."> <br><br>
 <input type="submit" value="ispiši riječi uređeno">

</form>

<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>