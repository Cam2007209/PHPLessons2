<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
include 'Includes/header.php';
function newCalc($c){
    $newnr=$c*2;
    echo"Here is double of what you wrote ".$newnr;
}
$c=50;
newCalc($c);
echo"<br>";
$a=100;
newCalc($a);
    ?>
</body>
</html>