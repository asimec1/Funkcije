<?php session_start(); $Z=16;
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
Napisati skriptu koja provjerava da li je postavljena session varijabla username. 
Ako je postavljena, ispisuje da ste logirani kao taj korisnik. 
Ako je vrijednost varijable „unregistered“, ispisuje da niste registrirani, 
a ukoliko uopće nije postavljena, ispisati poruku o grešci.
*/

if (isset($_SESSION["username"])) {
	$u=$_SESSION["username"]; 
	if($u=="unregistered") echo "niste registrirani!";
	else echo "logirani ste kao korisnik '".$u."'";
} else echo 'Greška: $_SESSION["username"] nije postavljena.';
?>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>