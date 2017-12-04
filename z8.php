<?php session_start(); $Z=8;
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
/*/ u z8_input.txt je niz redaka:
Ime Prezime Starost
-  treba pročitati fajl, pa ispisati naj(stariju,mlađu) osobu.
*/
$fn='z8_input.txt';
$D=True; // debug verzija - više ispisa 
// $D=False;

if ($f=fopen($fn,'r')) {
	if($D) echo '------ datoteka '.$fn.':<br>';
	$l=fgets($f,999);  // slijepo pretpostavljamo da je format fajla ok
	if ($l) { // bar jedna osoba
		$najs=$l;  
/*
 iduća linija radi u php 5.4+, ali daje parse err u php 5.3 i manjim:
 "Parse error: syntax error, unexpected '[' in"
		$najsG=trim(explode(' ',$l)[2]);
 problem je 'array dereference' polja koje vraća funkcija,
  u ovom slučaju 'explode'; (vidi npr. https://stackoverflow.com/questions/14742717/unexpected-bracket-php )
  rješenje (osim prelaska na noviju verziju php-a) je koristiti temp.
  varijablu, a može i ovako: */
  		list(,,$najsG)=explode(' ',$l);
		$najsG=(int)$najsG; // bez ovog casta, uspoređuju se stringovi, ne brojevi!
		// to se pojavilo nakon uklanjanja explode[] ... 2do
		$najm=$l;  $najmG=$najsG;
		if($D) echo ':'.$l.':'.'<br>';
		while ($l=fgets($f,999)) {
//			$g=trim(explode(' ',$l)[2]);
			list(,,$g)=explode(' ',$l); $g=(int)$g;
			if($D) echo ':'.$l.':'.'<br>';
			if ($g < $najmG) {$najmG=$g; $najm=$l;}
			else if ($g > $najsG) {$najsG=$g; $najs=$l;}
		}
		if($D) echo ' -------------';
		echo '<br>Najstarija osoba je '.$najs;
		echo '<br>Najmlađa osoba je '.$najm;
	}
	else echo 'Datoteka '.$fn.' je prazna.';
	fclose($f);
}
else echo 'Greška pri otvaranju "'.$fn;


?>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>