<!-- <!DOCTYPE html>
<html>
<body>


<?php  
/* $x = 75;
$y = 54;
$x = 150;
function myfunction() {
$x = 5;
$y = 34;
  echo $GLOBALS["x"] + $GLOBALS['y'];
 // echo $x;
  
}

myfunction() */
?>  

</body>
</html> -->
<html>
<body>

<form method="post" action="">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
    /* $name = $_REQUEST['fname'];
    echo $name; */
    $name = $_POST['fname'];
    echo $name;
?>

</body>
</html>