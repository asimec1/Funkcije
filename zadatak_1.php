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

function bez_samoglasnika($u) {
 static $samoglasnici="Xaeiou"; // koristiti ćemo case-insensitive stripos()
                    // X je kludge za index 0 == false
 for ($i=0; $i < strlen($u); $i++) {
	if (!(stripos($samoglasnici,$u[$i]) > 0))  echo $u[$i];
 }
}

echo " ulazni niz :" . $_POST["ulaz"] . ": <br><br>";
echo "izlazni niz : ";
bez_samoglasnika($_POST["ulaz"]);
echo ": <br><br>";

?>


<br><br> <a href= <?php echo "\"z" . $Z . ".php\""; ?>> povratak na zadatak</a>
</body>
</html>