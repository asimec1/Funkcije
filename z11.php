<?php session_start(); $Z=11;
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
U datoteci input.txt je nepoznati broj zapisa. 
Svaki zapis se sastoji od istog broja podataka.
Podaci su oblika PODATAK1 PODATAK .... PODATAK n.
Prvi redak datoteke sadrži nazive podataka. 
Podaci su odvojeni tabulatorom. 

Napisati skriptu koja otvara navedenu datoteku, te za svaki zapis 
napravi polje podatak => vrijednost. Na kraju ispisati broj zapisa.
*/

// izvor: http://www.englisch-hilfen.de/en/words/countries_eu.htm
$fn='z11_input.txt';

$b=file($fn); $bc=count($b);
echo '------ datoteka '.$fn.':<br>';
echo '<table border=1><thead><tr>';
$h=explode("\t",$b[0]); $n=count($h);
for($i=0; $i<$n; $i++) echo '<th>'.$h[$i].'</th>';
echo '<th>print_r(novo polje: podatak => vrijednost)</th>';
echo '</tr></thead><tbody>';
$bz=0;
for($i=1; $i<$bc; $i++) {
	echo '<tr>';
	$z=explode("\t",$b[$i]); $bz++;
	for($p=0; $p<$n; $p++) {
		echo '<td>'.$z[$p].'</td>';
		$pv[$h[$p]] = $z[$p];
	}
	echo '<td>';
	print_r($pv);
	echo '</td>';
	echo '</tr>';
}
echo '</tbody></table>';
echo ' -------------<br>Ukupno zapisa: '.($bc-1).'<br>';
?>


<br><br> <a href="index.php">povratak na izbor zadatka</a>
</body>
</html>