<?php

if (!isset($_GET['fullName'])) {
  header('Location:projekt_11_12_2022.php');
}

$fullName = $_GET['fullName'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project HTML + CSS + PHP + JS</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
  <div class="w100 h50" style="border: double; border-color: black;">
    <img class = "pb10 left pl10" src="https://www.teb.pl/img/logo-edu.png">
    <p class = "pr10"><b><?php echo $fullName; ?></b></p>
  </div>

  </br></br>

  <div class="w25 left h350 textCenter" ></div>

  <div class="w50 left h350 textCenter white">
    <h1>TODO...</h1>
  </div>

  <div class="w25 left h350 textCenter" ></div>
</body>
</html>