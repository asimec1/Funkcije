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
echo 'Ulaz :' . $u . '<br>';
/*
 setlocale(LC_ALL, ''); // default, presumably HR  *** 2do! ***
 sort($s, SORT_FLAG_CASE | SORT_STRING | SORT_LOCALE_STRING );
*/
$e = explode(' ',$u);
sort($e);
echo 'sortirano: ' . implode(' ',$e);

?>


<br><br> <a href= <?php echo "\"z" . $Z . ".php\""; ?>> povratak na zadatak</a>
</body>
</html>