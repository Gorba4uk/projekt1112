<?php

$errorId = null;
if (isset($_GET['error'])) {
  $errorId = $_GET['error'];
  echo 'Podane dane są nieprawidłowe!';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projekt HTML + CSS + PHP + JS</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
  <div class="w100 h50" style="border: double; border-color: black;">
    <img class = "pb10 left pl10" src="https://www.teb.pl/img/logo-edu.png">
    <p class = "pr10"><b>Imię i Nazwisko - pojawi sie dopiero po zalogowaniu się</b></p>
  </div>

  </br></br>

  <div class="w25 left h350 textCenter" ></div>

  <div class="w50 left h350 textCenter white">

    <?php 
      if ($errorId == '001') {
        ?>
              <div class="textCenter errorBox">
                <p>Podane dane są nieprawidłowe!</p>
              </div>
        <?php
      }
    ?>

    <form action = "projekt_11_12_2022-backend.php" method = "POST" onsubmit="checkData()">
      <p style = "margin-top: 65px;">Login</p>
      <input type = "text" name = "login" id = "login" style = "width: 50%;" required>
      <p>Hasło</p>
      <input type = "password" name = "password" id = "password" style = "width: 50%;" required>
      <p></p>
      <input type = "submit" value = "Zaloguj" style = "width: 30%; background-color: #83df74;">
    </form>
  </div>

  <div class="w25 left h350 textCenter" ></div>

  <script type="text/javascript">

    function checkData() {
      let login = document.getElementById('login').value;
      let password = document.getElementById('password').value;

      if (
          login.length < 4
          || password.length < 8
        ) {
          alert('Login lub hasło za słabe!');
          event.preventDefault();
      }
    }

  </script>
</body>
</html>