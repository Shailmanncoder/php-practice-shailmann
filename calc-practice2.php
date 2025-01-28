<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        <input type="number"name="no1"placeholder="Enter first number"required>
        <input type="number"name="no2"placeholder="Enter second number"required>
        <button type="submit"name="operation"value="add">+</button>
        <button type="submit"name="operation"value="subtract">-</button>
        <button type="submit"name="operation"value="multiply">x</button>
        <button type="submit"name="operation"value="divide">÷</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1=$_REQUEST['no1'];
        $num2=$_REQUEST['no2'];
        $operation=$_REQUEST['operation'];
        $result="";
        
        if($operation =='add'){
            $result=$num1 + $num2;
            echo "Result : $num1 + $num2 = $result";
        }
        elseif($operation =='subtract'){
            $result=$num1 - $num2;
            echo "Result : $num1 - $num2 = $result";
        }
        elseif($operation =='multiply'){
            $result=$num1 * $num2;
            echo "Result : $num1 x $num2 = $result";
        }
        elseif($operation =='divide'){
           if($num2 !=0){
            $result=$num1 / $num2;
            echo "Result : $num1 ÷ $num2 = $result";
           }
           else{
            echo "0 is not allowed in division.";
           }
        }
    }
    
    ?>
</body>
</html>
