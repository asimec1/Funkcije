<?php session_start(); $Z=13;
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



<?php 
/*
U polju su zapisane vrijednosti država (ključ) => glavni grad (vrijednost). 
Napisati skriptu koja sve države sprema u novo polje, te to polje nasumično 
izmješa. Nakon toga treba skinuti zadnja 2 elementa iz polja 
(pritom smanjivši veličinu polja za 2) i ispisati ih.
*/
 http://geography.about.com/od/countryinformation/a/capitals.htm :
$polje=array(
	"Afghanistan" => "Kabul",
	"Albania" => "Tirana",
	"Algeria" => "Algiers",
	"Andorra" => "Andorra la Vella",
	"Angola" => "Luanda",
	"Antigua and Barbuda" => "Saint John's",
	"Argentina" => "Buenos Aires",
	"Armenia" => "Yerevan",
	"Australia" => "Canberra",
	"Austria" => "Vienna",
);
foreach ($polje as $d => $g) echo $d." => ".$g."<br>"; echo "<br>";
$novo=array_keys($polje);
echo '--------- novo polje:<br>';
foreach ($novo as $d) echo $d.", "; echo "<br>";
shuffle($novo);
echo '--------- novo (izmješano) polje:<br>';
foreach ($novo as $d) echo $d.", "; echo "<br>";
echo '<br>-- zadnji: '.array_pop($novo).', predzadnji: '.array_pop($novo);
echo '<br>--------- najnovije (skraćeno) polje:<br>';
foreach ($novo as $d) echo $d.", ";
?>

<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>