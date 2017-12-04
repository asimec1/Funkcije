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

$u=$_POST["ulaz"];
echo " ulazni niz :" . $u . ": <br><br>";

$f=array();

for ($i=0; $i < strlen($u); $i++) { //prvi prolaz, inače 'undefined index'
	$f[$u[$i]] = 0;
}

for ($i=0; $i < strlen($u); $i++) {
	$f[$u[$i]]++;
}
echo ":znak:frekvencija ...<br>";

foreach($f as $k => $v) {
    echo ":" . $k . ":" . $v . " ";
}

echo "<br>RTFM... => drugi način: count_chars( ,1) ";
$f = count_chars($u,1);
foreach($f as $k => $v) {
    echo " :" . chr($k) . ":" . $v;
}

?>


<br><br> <a href= <?php echo "\"z" . $Z . ".php\""; ?>> povratak na zadatak</a>
</body>
</html>