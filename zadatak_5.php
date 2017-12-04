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
/*
function mjesaj($a) {
	$c = count($a);
	for ($i=0; $i < $c; $i++) {
		$r=mt_rand(0,$c-1);
		$t=$a[$i]; $a[$i]=$a[$r]; $a[$r]=$t;
	}
}
*/
$u=$_POST["ulaz"]; $n=$_POST["n"];
echo 'Ulaz :' . $u . '<br>';
$e = explode(' ',$u);
for ($i=1; $i <= $n; $i++) {
	shuffle($e);
	echo $i . '. ' . implode(' ',$e) . '<br>';
}

?>


<br><br> <a href= <?php echo "\"z" . $Z . ".php\""; ?>> povratak na zadatak</a>
</body>
</html>