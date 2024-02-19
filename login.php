<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Parisienne&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles-login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valentine's day Review &lt;3</title>
  <script>
      function playAudioAndRedirectCorrect() {
      var audio = new Audio('audio/bell.mp3');
      audio.play();
      
      setTimeout(function() {
        window.location.href = 'survey.php';
      }, 1000); 
    }

    function playAudioAndRedirectWrong() {
      var audio = new Audio('audio/wrong.mp3');
      audio.play();
      
      setTimeout(function() {
        window.location.href = 'deadend.html';
      }, 1000); 
    }
  </script>
</head>
<body>
  
<div class="card">
  <div class="card-container">
    <div class="card-header"></div>
      <div class="card-body">
        <div class="card-border-left"></div>
        <div class="card-content">
          <p class="card-title">
            Choose my correct <span style="font-style: italic; font-weight: bold;">Novia!</span>
          </p>
          <form action="login.php" method="post">
            <button oncli class="b-frog" type="submit" name="choice" value="frog"></button>
            <button class="b-mouse" type="submit" name="choice" value="mouse"></button>
          </form>
          <p class="card-message">
            Before we get started, to be sure that you are  <span style="font-style: italic; font-weight: bold;">mi novia.</span> Which ballerina would you choose above?
          </p>
        </div>
        <div class="card-border-right"></div>
      </div>
    <div class="card-footer"></div>
  </div>
</div>

</body>
</html>

<?php
if(isset($_POST["choice"])){
  if($_POST["choice"] === "frog"){
    $_SESSION["Elisa"] = $_POST["choice"];
    echo "<script>playAudioAndRedirectCorrect();</script>";
  } elseif ($_POST["choice"] === "mouse"){
    session_destroy();
    echo "<script>playAudioAndRedirectWrong();</script>";
  }
}
?>
