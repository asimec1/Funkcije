<?php session_start(); $Z=1;
 $_SESSION["Z"]=$Z;?>
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <title>ntpws 2015 - Nenad Barbutov - 
<?php echo $Z ?>. zadatak</title>
 </head>
<body>
<h2> Zadatak <?php echo $Z; ?>.</h2>

<form action= <?php echo "\"zadatak_" . $Z . ".php\""; ?>
 method="post" accept-charset="UTF-8">

Ispisuje ulazni niz znakova bez samoglasnika.<br><br>
Ulazni niz: <input type="text" name="ulaz" size="80" value=
 "Je li Anuška Ivanina zaova?"> <br><br>
 <input type="submit" value="ukloni samoglasnike!">

</form>

<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>