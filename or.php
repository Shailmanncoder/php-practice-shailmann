<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=44;
    $b=44;
    $c=33;
    
    if($a==$b || $a>$b){
        echo 'Both conditions are true.';
        echo '<script>
        window.alert("Both conditions are true.")
        </script>';
    }
    ?>
</body>
</html>