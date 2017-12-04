<?php session_start(); $Z=15;
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

<?php /*
U polju se nalaze vrijednosti korisničko ime (ključ) => lozinka (vrijednost). 
Napisati skriptu koja provjerava da li u polju postoji 
korisnik s zadanim korisničkim imenom i lozinkom. 
Ako postoji, postaviti session varijablu username na to korisničko ime, 
a u slučaju da ne postoji, postaviti ju na „unregistered“.
*/

$p["john"]="doe"; $p["jack"]="box"; $p["count"]="123"; $p["Count0"]="zero";

if (isset($_POST["ki"]) and isset($_POST["pw"])) {
	$k=$_POST["ki"]; 
	if($p[$k]==$_POST["pw"]) $_SESSION["username"]=$k;
	else $_SESSION["username"]="unregistered";
}

echo '<b>$_SESSION["username"]: </b>';
if (isset($_SESSION["username"])) {
	$u=$_SESSION["username"]; echo $u;
} else echo '... nije definirana.';
echo '<br><br>';

echo '------ korisničko ime:lozinka:<br>';
foreach($p as $k => $l) echo $k.':'.$l.':<br>';
echo ' -------------<br>';
?>

<!-- 2do: self-name -->
<form action= <?php echo "\"z15.php\""; ?>
 method="post" accept-charset="UTF-8">
korisničko ime: <input type="text" name="ki" size="12" value="Count0">
korisničko ime: <input type="password" name="pw" size="12" value="zero">
<input type="submit" name="botun" value="provjeri">

</form>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>