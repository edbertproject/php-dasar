<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>

    <style>
    
    </style>
</head>
<body>
    
    <?php 
        function getNumber ( $number1 = "0" , $number2 = "0" ){
            return $number1 + $number2;
        }
    ?>

    <h1> <?= getNumber(1,9); ?> </h1>




</body>
</html>