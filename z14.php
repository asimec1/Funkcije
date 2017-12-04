<?php session_start(); $Z=14;
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
Napisati skriptu koja polju skida prvi element i stavlja ga na zadnje mjesto. Postupak ponavljati dok se ne dobije početno polje. 
U svakom koraku je polje potrebno ispisati sa svim indeksima.
*/
 http://geography.about.com/od/countryinformation/a/capitals.htm :
$polje=array(
	"Afghanistan" => "Kabul",
	"Albania" => "Tirana",
	"Algeria" => "Algiers",
	"Andorra" => "Andorra la Vella",
	"Angola" => "Luanda"
);
$s=count($polje);
foreach ($polje as $d => $g) echo $d." => ".$g."<br>"; echo "<br>";
while($s--) {
	array_push($polje,array_shift($polje));
	foreach ($polje as $d => $g) echo $d." => ".$g."<br>"; echo "<br>";
}
?>

<br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>