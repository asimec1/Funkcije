<?php session_start(); $Z=$_SESSION["Z"];?>
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <title>ntpws 2015 - Nenad Barbutov - rezultat 
<?php echo $Z; ?>. zadatka</title>
 </head>
<body>
<h2> Rješenje <?php echo $Z; ?>. zadatka</h2>


<?php

$n=$_POST["n"];
$t=time(); $dan = 24*60*60;
while (date('w',$t) != 6) {$t += $dan;} // nađi prvu buduću subotu
echo 'Idućih ' . $n . ' subota:<br>'; // provjeriti TZ,DST
if ($n < 0) {$dan=-$dan; $n=-$n;} // može i unazad
for ($i=1; $i <= $n; $i++) {
	echo $i . '. ' . date('d.m.Y.',$t) . ' '.date('l',$t).'<br>';
	$t += 7*$dan;
}

?>


<br><br> <a href= <?php echo "\"z" . $Z . ".php\""; ?>> povratak na zadatak</a>
</body>
</html>