<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num1=10;
    $num2=20.30;
    $sum=$num1+$num2;
    $div=$num1/$num2;
    echo"The sum of $num1 and $num2 is ".number_format($sum,2);
    echo"The division of $num1/$num2 is ".number_format($div,2);
    unset($div);
    echo $div;
    ?>
    
</body>
</html>