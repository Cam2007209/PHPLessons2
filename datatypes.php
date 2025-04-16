<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        //string
        $name='Cameron is cool';

        //Integer
        $name=3;

        //Float 
        $name=3.14159;

        /* Boolean
        True=1
        False=0
        */
       
        //Array
        $names= array ("Kamron","Camron","Cameron");
        echo $names['2'];
    ?>
</body>
</html>