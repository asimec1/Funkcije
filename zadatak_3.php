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
echo " ulazni niz :" . $u . ": sadrži " . str_word_count($u)
 . " riječi. <br><br>";

?>


<br><br> <a href= <?php echo "\"z" . $Z . ".php\""; ?>> povratak na zadatak</a>
</body>
</html>