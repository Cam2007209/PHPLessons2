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
        $x=5;

        if($x==2){
            echo"Cameron is tall";
        }
        elseif($x==5){
            echo "Cameron is strong";
        }
        elseif($x==51){
            echo "Cameron is handsome";
        }
        elseif($x==23){
            echo "Cameron is ugly";
        }
        elseif($x==2){
            echo "Cameron is weak";
        }
        else{
            echo"Cameron is short";
        }
    ?>
    <?php
        $x=5;

        switch($x){
            case 5:
                echo"The answer is 5";
            break;
            case"number":
                echo"The answer is number";
            break;
            case 4:
                echo "The answer is 5";
            break;
            case 8:
                echo "The answer is not real";
            break;
            default:
                echo "There is no answer";
        }
    ?>
</body>
</html>