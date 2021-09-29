<?php

$timestamp = "11-12-2021";

$timestampIntern = "2021-12-29";

$stringOut = "  Hello DMACC  ";

$phoneNumber = '1234567890';

$money = 123456;

function dateFormat($timestamp){
    $date = date_create($timestamp);
    echo date_format($date, "m/d/Y" );

}

function dateFormatIntern($timestamp){
    $date = date_create($timestamp);
    echo date_format($date, "d/m/Y" );

}

function stringInput($stringInput){
        echo "The Word or String is: " . $stringInput . "<br>";
        echo "Number of Characters: " . strlen($stringInput) . "<br>";
        trim($stringInput);
        echo "All lowerCase: " . strtolower($stringInput) . "<br>";

      



}

function checkDmacc($stringInput){
    $dmaccPOS =  stripos($stringInput, "DMACC");
   
    if($dmaccPOS >= 0){
        echo $dmaccPOS;
    }
    else{
        echo "Negative";
    }
}

function formatPhone($phoneNumber){

   $fixNumber = sprintf("%u-%u-%u",
   substr($phoneNumber, 0, 3),
   substr($phoneNumber, 3, 3),
   substr($phoneNumber, 6));
   echo $fixNumber;

}


function formatCurrencyUS($money){
    $moneyVar = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
    $moneyVar->setAttribute( NumberFormatter::MAX_FRACTION_DIGITS, 0);
    echo $moneyVar->formatCurrency( $money, "USD");
}





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
    <h1>PHP Functions</h1>

    <h2>Date</h2>
    <h3>mm/dd/yyyy format: <?php dateFormat($timestamp)?></h3>
    <h3>dd/mm/yyyy International Format: <?php dateFormatIntern($timestampIntern)?></h3>

    <h2>String</h2>
    <h3> <?php stringInput($stringOut)?></h3>
    <h3>Is DMACC in the String: <?php checkDmacc($stringOut)?></h3>

    <h2>Phone Number and Currency</h2>
    <h3>Your Phone Number is: <?php formatPhone($phoneNumber)?></h3>
    <h3>Currency: <?php formatCurrencyUS($money)?></h3>


    
</body>
</html>