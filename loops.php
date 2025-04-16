<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include 'Includes/header.php';
$x=10;

//Do While Loop
do{
    echo"hi there<br>";
    $x++;
}

//While Loop
while($x<=5);

//For Loop
for($x=0; $x<=10; $x++){
    echo"hi<br>";
}

//Foreach Loop
$array=array("Daniel", "Jane", "Jacob","Cameron", "James");
foreach($array as $loopdata){
    echo"My name is ".$loopdata."<br>";
}
    ?>
</body>
</html>