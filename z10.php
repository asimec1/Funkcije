<?php session_start(); $Z=10;
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
u output.txt je niz redaka sortiran po starosti:
 Ime Prezime Starost
-  treba ubaciti vlastiti zapis na pravo mjesto.
*/
$fn='output.txt';

$n = -1; // za poziv iz glavne forme, nepostojeća starost: da bi var. bila def.
$nz = "";
$a = $_POST["botun"];

if (isset($_POST["nz"])) {
// ako smo pozvani s definiranim _nz_, dodaj novi zapis
$nz=$_POST["nz"]; list(,,$n)=explode(' ',$nz); // izbjegavamo array deref.
                                              // što radi tek od php 5.4+
						$n=(int)$n; // cast: osiguravamo num. usporedbu
}

switch($a) {
 case "isprazni":
	$fo=fopen($fn,'w'); fclose($fo);
 break;
 case "reset":
	$f1="output_0.txt"; $fi=fopen($f1,'r');
	$fo=fopen($fn,'w'); 
	while ($l=fgets($fi)) fputs($fo,$l);
	fclose($fi); fclose($fo);
 break;
 case "dodaj":
	$b=file($fn); $bc=count($b); $f=fopen($fn,'w');
	for($i=0; $i<$bc; $i++) {
//		$g=trim(explode(' ',$b[$i])[2]);
		$g=explode(' ',$b[$i]); $g=(int)$g[2]; //cast
		if ($g > $n) { $n=799; fputs($f,$nz."\n");}
		fputs($f,$b[$i]);
	}
	if ($n!=799) fputs($f,$nz."\n");
 break;
 case "Zadatak 10": // poziv iz glavne forme
 break;
 default: echo '<br><br>*** nepredviđeni case "'.$a.'" ***<br><br>';
}

$b=file($fn); $bc=count($b);
echo '------ datoteka '.$fn.':<br>';
for($i=0; $i<$bc; $i++) echo ':'.$b[$i].':<br>';
echo ' -------------<br>';
?>

<!-- 2do: self-name -->
<form action= <?php echo "\"z10.php\""; ?>
 method="post" accept-charset="UTF-8">

Novi zapis: <input type="text" name="nz" size="42" value="Kiki Riki 3">
<input type="submit" name="botun" value="dodaj">
<br> <br>  vrati ulazni fajl na originalni
 <input type="submit" name="botun" value="reset">
<br> <br> obriši sadržaj ulaznog fajla
 <input type="submit" name="botun" value="isprazni">

</form>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>