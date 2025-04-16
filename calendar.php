<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
    text-align:center;
    font-size: 120px;
    font-family:arial;
    margin-top: 38vh;
    color:White;
}
body{
    background-color:black;
}

    </style>
</head>
<body>
    <?php
    include 'Includes/header.php';
    ?>
<div class="tree">
<?php 
    $dayofweek=date("w");
    switch($dayofweek){
        case 1: 
            echo "<p>It is Monday!</p>";
            break;
        case 2: 
            echo "<p>It is Tuesday!</p>";
            break;
        case 3: 
            echo "<p>It is Wednesday!</p>";
            break;
        case 4: 
            echo "<p>It is Thursday!</p>";
            break;
        case 5: 
            echo "<p>It is Friday!</p>";
            break;
        case 6: 
            echo "<p>It is Saturday!</p>";
            break; 
        case 0: 
            echo "<p>It is Sunday!</p>";
            break;
    }
 
?>
</div>
</body>
</html>