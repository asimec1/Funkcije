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
$nz=$_POST["nz"]; $n=trim(explode(' ',$nz)[2]);
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
// double buffering... treba paziti da ne upišemo "dulji preko kraćeg" stringa
	if ($f=fopen($fn,'r')) {
		$fo=fopen($fn,'r+');
		echo '------ datoteka '.$fn.':<br>';
		if($l=fgets($f,999)) {// slijepo pretpostavljamo da je format fajla ok
			while ($l) { // 
				$g=trim(explode(' ',$l)[2]);
						// magic number 799 je veći od najveće moguće starosti
				if ($g > $n) { echo '&gt;&gt;&gt;'.$nz.'<br>'; $n=799; 
					// učitaj koliko treba zapisa, da se ne pregaze nz-om
					$bu=strlen($l); $nzL=strlen($nz); $b[0]=$l; $i=1; 
					while($bu < $nzL)
						if($l=fgets($f,999)) {$b[i]=$l; $bu+=strlen($l); $i++;}
						else
					}
				} else fputs($fo,$l);
				echo ':'.$l.':<br>';
				$l=fgets($f,999);
			}
			if ($n!=799) /* novom je mjesto na kraju */ fputs($fo,$nz);
		} else /* fajl je bio prazan */ fputs($fo,$nz);
		echo ' -------------<br>';
		fclose($f); fclose($fo);
	}
	else echo 'Greška pri otvaranju "'.$fn;

 break;
 case "Zadatak 10": // poziv iz glavne forme
 break;
 default: echo '<br><br>*** nepredviđeni case "'.$a.'" ***<br><br>';
}

if ($f=fopen($fn,'r')) {
	echo '------ datoteka '.$fn.':<br>';
	while ($l=fgets($f,999)) echo ':'.$l.':<br>';
	echo ' -------------<br>';
	fclose($f);
} else echo 'Greška pri otvaranju "'.$fn;
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