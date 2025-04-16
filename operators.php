<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-color:black;
    color:white;
}

    </style>
</head>
<body>
    <?php
    include 'Includes/header.php';
        //Arithmetic Operators
        echo 8**2;        
    ?>
    <?php
        //Assignment Operators
        $x= 50;
        $x/=5;
        echo $x;
    ?>
    <?php
        //Comparison Operators
        $x=2;
        $y=4;

        if($x==$y){
            echo "True!";
        }
        else{
            echo"False!";
        }
    ?>
    <?php
        //Increment/Decrement Operators
        $x=20;
        echo --$x;
        echo $x;
    ?>
    <?php
        //Logical Operators
        $x=30;
        $y=50;

        if($x==$y xor 17==17 ){
            echo"True";
        }
    ?>
</body>
</html>