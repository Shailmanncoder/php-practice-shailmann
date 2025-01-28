<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* $x=5;
    function mytest(){
        $x=15;
        echo "<p>Varible x inside function is:$x</p>";
    }
    mytest();
    //echo "<p>Variable x outside fu *//* nction is: $x</p>"; */
    /* function sum(){
        $x=55;
        $y=44;
        $sum = $x + $y;
        echo "The sum of these two numbers is : $sum ";
    }
    sum(); */
    function sum($x,$y){
        $sum = $x + $y;
        return $sum;
    }

    echo "sum: ". sum(55, 180) . "<br>";
    ?>

</body>
</html>