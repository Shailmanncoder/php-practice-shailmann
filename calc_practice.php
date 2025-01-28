<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button-Based Stylish Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            background: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .calculator h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group input {
            font-size: 16px;
            padding: 10px;
            width: calc(100% - 20px);
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .btn {
            background: #4CAF50;
            color: #fff;
            font-size: 16px;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            width: 24%;
        }
        .btn:hover {
            background: #45a049;
        }
        .result {
            font-size: 20px;
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Button Calculator</h1>
        <form action="" method="post">
            <div class="input-group">
                <input type="number" name="num1" placeholder="Enter first number" required>
            </div>
            <div class="input-group">
                <input type="number" name="num2" placeholder="Enter second number" required>
            </div>
            <div class="btn-group">
                <button type="submit" name="operation" value="add" class="btn">+</button>
                <button type="submit" name="operation" value="subtract" class="btn">-</button>
                <button type="submit" name="operation" value="multiply" class="btn">×</button>
                <button type="submit" name="operation" value="divide" class="btn">÷</button>
            </div>

            </div>
    </div>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $operation=$_POST["operation"];
        $result="";
            if($operation=="add"){
                $result=$num1+$num2;
                echo "Result: $num1 + $num2 = $result";

            }   
            elseif($operation=="subtract"){
                $result=$num1-$num2;
                echo "Result: $num1 - $num2 = $result";
            }
            elseif($operation=="multiply"){
                $result=$num1*$num2;
                echo "Result: $num1 x $num2 = $result";
            }
            elseif ($operation=="divide") {
               if( $num2 !=0){
                $result =$num1 / $num2;
                echo "Result: $num1 ÷ $num2 = $result";
               }
               else {
                echo "Error: Division by zero is not allowed.";
            }
            }
}
?>
</body>
</html>