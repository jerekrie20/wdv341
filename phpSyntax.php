<?php

//line comment
/*
block comment
 */

 //define some PHP Variables

 $firstName = "Jeremiah";

 $lastName= "Kriegel";
 echo "<h1> $firstName </h1>";



 //$fmt = numfmt_create( 'en_US', NumberFormatter::CURRENCY );
 //$formattedSales = numfmt_format_currency($fmt, $totalSales, "USD")."\n";

//echo numfmt_format_currency($fmt, 1234567.891234567890000, "EUR")."\n";

 $totalSales = 123.45;

 function processSalesPerson(){
     //code goes here

     global $firstName, $lastName;

     $salesName = $firstName . ", ". $lastName;
     return $salesName;


 }

processSalesPerson();  //calls the function


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>PHP Syntax examples</h2>
    <h3>Sales Person: <?php echo processSalesPerson()?></h3>
    <p>Total Sales from today:<?php echo $totalSales ?></p>
    
</body>
</html>