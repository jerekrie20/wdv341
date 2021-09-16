<?php

$yourName = "Jeremiah Kriegel";

$h1Element = "<h1> PHP Basics </h1>";

$number1 = 20;
$number2 = 40;
$total = $number1 + $number2;

$programLan = array("PHP", "HTML", "Javascript");

$newArray = "";
foreach ($programLan as $value){
    $newArray .= " ' ". $value. " ' " . " ,";
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        <?php
            echo "let languages = [$newArray];"
        ?>

        console.log(languages);
       
    </script>
    
</head>

<body>
    <?php echo $h1Element?>
    <h2>My Name: <?php  echo $yourName?></h2>
    <h3>Number One: <?php  echo $number1?></h3>
    <h3>Number Two: <?php  echo $number2?></h3>
    <h3>Total: <?php  echo $total?></h3>
    <h4><script> document.write(languages)</script></h4>
    
</body>
</html>