<?php session_start(); $Z=12;
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
	"Azerbaijan" => "Baku"
);
print_r($polje);
$i=0; foreach($polje as $d => $g) $novo[$i++]=$g;
echo '<br><br>';
print_r($novo); echo '<br><br>';
sort($novo);
print_r($novo); echo '<br><br>';
?>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>