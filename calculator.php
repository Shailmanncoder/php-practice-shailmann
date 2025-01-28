<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero is not allowed.";
                }
                break;
            default:
                $result = "Invalid operation.";
        }
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>Simple PHP Calculator</h1>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" required>
        <br><br>

        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" required>
        <br><br>

        <label for="operation">Operation:</label>
        <select name="operation" id="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php if (isset($result)): ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>