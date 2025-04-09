<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
body{
    background-color:black;
    color:white;
}

    </style>
</head>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Calculator.php">Calculator</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More Pages
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="datatypes.php">Data Types</a></li>
            <li><a class="dropdown-item" href="operators.php">Operators</a></li>
            <li><a class="dropdown-item" href="index.php">Index</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <?php
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
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>