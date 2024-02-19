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
  <link rel="stylesheet" href="styles/styles-survey2.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valentine's day Review &lt;3</title>
  <script>
        function showFollowUpQuestions() {
            var radioYes = document.getElementById('q8-yes');
            var followUpQuestions = document.getElementById('follow-up-questions');

            if (radioYes.checked) {
                followUpQuestions.style.display = 'block';
            } else {
                followUpQuestions.style.display = 'none';
            }
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
            Favorito de mi amor.
          </p>
          <p class="card-message">
            Select your <span style="font-style: italic; font-weight: bold;">Favorito</span> thing or moment that night.
          </p>
   
         
        </div>
        <div class="card-border-right"></div>
      </div>
    <div class="card-footer"></div>
  </div>
</div>



</body>
</html>
