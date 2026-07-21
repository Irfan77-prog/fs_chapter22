<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Built In Function in PHP</h1>
    <hr>
    <h3>1. strlen($str)</h3>
    

<?php

$name="    mUHamad iRFaN BIN mOHd RaZaLi ";
echo strlen($name);  
?>
<h3>2. strtoupper($str) , strtolower($str) </h3>
<?php

echo $name. "<br><br>";
echo strtoupper($name)."<br><br>";
echo strtolower($name);
?>

<h3>3. rand($min, $max)</h3>
<?php

$lucky= rand(1,16);
echo $lucky;
?>

<h3>4. date($format)</h3>
<?php
echo date("d/M/y")."<br><br>";

echo"Copyright 2021 - ".date("Y");

?>

<h3>5. count($array)</h3>
<?php
$warna = ['purple','red', 'orange'];

echo count($warna);

?>

<h3>6. Trim</h3>
<?php
echo "Text = ".$name;
echo "<br>Size= ".strlen($name);

echo"<br>Trim= ".trim($name);
echo"<br>Size Trim =". strlen(trim($name));
?>

<h3>7. Substr</h3>
<?php
$institusi = "Politeknik Kuala Terengganu";
echo"Text : ". $institusi;

echo"<br>";
echo substr($institusi,0,10)
?>
</body>
</html>