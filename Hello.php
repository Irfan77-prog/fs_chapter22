<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<?php


/* DFP40443: Full Stack Web Development
Activity: My First PHP Script
Name: Irfan
*/


$nama = "MUHAMAD IRFAN BIN MOHD RAZALI";

// This line prints a message to the browser
echo "Hello World!";

#You can also include HTML tags inside echo
echo"<h1>Welcome to PHP Programming</h1>"; 
echo"<hr><h3> My Name Is $nama</h3>"; 
echo "<br><br>";
echo $nama;

echo "<hr><h3>Double Quote vs Single Quote</h3>";
$institusi = "Politeknik Kuala Terengganu";

echo "Institusi: $institusi";
echo"<br>";
echo 'institusi : $institusi';

echo"<hr><h3>Constant</h3>";
//Defining constant
define("SITE_URL","https://pkt.mypolycc.edu.my");

//Using constant
echo 'Thank You For Visiting - ' . SITE_URL;
echo "<br>";
echo SITE_URL;

echo"<hr><h3>Variable VS Constant</h3>";
// 1.Defining a Constant (Fixed value)
define("TAX_RATE", 0.08); //6% Sales Tax

//2. Declaring Variables (Can Change)
$itemName = "Laptop";
$price = 2500;

$itemName = "Mouse";
$price = 10;

//3. Calculation
$totalTax = $price * TAX_RATE;
$totalPrice = $price + $totalTax;

//4. Output
echo"Item: " . $itemName . "<br>";
echo"Base Price: RM " . $price . "<br>";
echo"Total with Tax: RM " . $totalPrice;


?>