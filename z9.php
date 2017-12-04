<?php session_start(); $Z=9;
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
/*/ u z9_input.txt je niz redaka:
Ime Prezime Datum_rođenja
Datum_rođenja je formata d/m/g
-  treba ispisati osobu koja prva ima rođendan
*/
$fn='z9_input.txt';
$D=2; // debug verbosity: 0 tiho, 1 - više ispisa, 2 - logoreja
// $D=0;

// ulaz: "d/m/g" rođenja; izlaz: broj dana do rođendana
// 2do: trebalo bi fiksirati "danas" 
 //  da izbjegnemo pogrešku ako smo "između osoba" baš oko ponoći
function ddor($dr) {
	$dmg=explode('/',$dr);
// bilo koja prestupna godina, zbog rođenih 29.2.
	$x=mktime(0,0,0,$dmg[1],$dmg[0],2000)-mktime(0,0,0,date('m'),date('d'),2000);
	if ($x<0) $x+=365*24*60*60; 
	return floor($x/60/60/24);
}

if ($f=fopen($fn,'r')) {
	$danas=date('d/m'); $du=time();
	echo 'Danas je '.date('d.m.').' ut:'.$du.'<br>';
	if($D) echo '------ datoteka '.$fn.', dana do rođendana:<br>';
	$l=fgets($f,999);  // slijepo pretpostavljamo da je format fajla ok
	if ($l) { // bar jedna osoba
		$p=$l;  /* umjesto $drp=ddor(trim(explode(' ',$l)[2]));
		što daje parse err u php 5.3 i nižim, ovako: */
		$tmp=explode(' ',$l); $drp=ddor($tmp[2]);
		if($D) echo ':'.$l.':'.$drp.':<br>';
		while ($l=fgets($f,999)) {
//			$dr=ddor(trim(explode(' ',$l)[2]));
			$dr=explode(' ',$l); $dr=ddor($dr[2]);
			if($D) echo ':'.$l.':'.$dr.':<br>';
			if ($dr < $drp) {$drp=$dr; $p=$l;}
		}
		if($D) echo ' -------------<br>';
		echo '<br>Osoba koja prva ima rođendan je '.$p;
	}
	else echo 'Datoteka '.$fn.' je prazna.';
	fclose($f);
}
else echo 'Greška pri otvaranju "'.$fn;


?>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>