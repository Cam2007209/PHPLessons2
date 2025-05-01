<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "includes/header.php";
    setcookie("Name","Cameron", time() + 86400);

    $_SESSION['name']= '12';

    ?>
</body>
</html>