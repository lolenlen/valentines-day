<?php
   if (!isset($_SESSION)) {
    session_start();
  }

  $questions = array(
    'q1' => "Did you like our Valentine's date?",
    'q2' => "Did you like being my only special bonita sweet Valentine?",
    'q3' => "Porque tu eres demaisdo bonita? -3-",
    'q4' => "Te amo",
    'q5' => "Did you like the boquet that I made for you?",
    'q6' => "Do you think your boyfriend looked cute as your date?",
    'q7' => "Did you like the surprise your boyfriend left for you?",
    'q8' => "Will you be my only special bonita sweet Valentine next Feb 14?"
  );

  $options = array(
    'q1' => array("Yes hehe","It was perfect","it was okay","It was the worst date ever"),
    'q2' => array("Yes hehe","OFC! it was coco-banana","it was okay","you are the worst date ever"),
    'q3' => array("I am just born like that","Do not drool on me too much","It's a full-time job, you know? Beauty sleep, beauty regimen, and, of course, being naturally fabulous.","Yes hehe"),
    'q4' => array("Tambien te amo","Te amo de lo que tu me quires","ew"),
    'q5' => array("Yes hehe","Not enough tulips!","meh","It was the ugliest boquet ever"),
    'q6' => array("ehhhh","ew"),
    'q7' => array("Yes hehe","It was super cute","It was expected","Ugly"),
    'q8' => array("idk","only if you buy me something expensive","No, you are a horrible date")
  );

  $next_questions = array(
    'q9' => "What memories should we create for next Valentine's day?",
    'q10' => "Specify our next perfect valentine's date",
    'q11' => "What kind of flowers do you want next Feb 14"
  );

  $next_options = array(
    'q9' => array("Romantic Dinner","Travel","Couples Massage","Live Entertainment"),
    'q10' => array("Type it down here, mi amor"),
    'q11' => array("Tulips","Roses","Wild flowers","Sunflowers")
  );

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle the form submission
    foreach ($questions as $key => $question) {
        if (isset($_POST[$key])) {
            $answer = $_POST[$key];
            echo "<div class='idk'>
                    <p>Question: $question</p>
                    <p>Answer: $answer</p>
                  </div>";
      }
  }
};

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
  <link rel="stylesheet" href="styles/styles-survey.css">
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

        function playAudioAndRedirect() {
      var audio = new Audio('audio/bell.mp3');
      audio.play();
      
      setTimeout(function() {
        window.location.href = 'survey2.php';
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
            Todo para mi Corazon.
          </p>
          <p class="card-message">
            Tell <span style="font-style: italic; font-weight: bold;">ti novio </span> all about how you felt that night.
          </p>
          <form class="survey" action="survey.php" method="post">
            <div class="grand-survey-container survery-container">
             <?php
             // Generate radio buttons for each question
              foreach ($questions as $key => $question) {
                echo "<fieldset>";
                echo "<legend class='survey-ques'>$question</legend>";

             // Generate radio options for each question
               foreach ($options[$key] as $option) {
               

                 echo "<label class='survey-radio'><input type='radio' name='$key' value='$option'>$option<br></label>";
               }
                
               if ($key == 'q8') {
                echo "<label class='survey-radio'><input type='radio' id='q8-yes' name='q8' value='Yes hehe' onclick='showFollowUpQuestions()'>Yes hehe</label><br>";
            }
                  echo "<label>Specify here:</label><input class='survey-other' type='text' name='other'>";

                  echo "</fieldset>";
             }

                
             ?>
               <div class="survey-container" id="follow-up-questions" style="display: none;">
                            <?php
                            // Display follow-up questions initially hidden
                            foreach ($next_questions as $key => $question) {
                                echo "<fieldset>";
                                echo "<legend class='survey-ques'>$question</legend>";

                                // Generate radio options for each follow-up question
                                foreach ($next_options[$key] as $option) {
                                    echo "<label class='survey-radio'><input  type='radio' name='$key' value='$option'>$option<br></label>";
                                }
                                echo "<label>Specify here:</label><input class='survey-other' type='text' name='other'>";
                                echo "</fieldset>";
                            }
                            ?>
                        </div>
             <input class='survey-submit' type="submit" value="Next" name="next" onclick="playAudioandRedirect()">
          </div>
        </form>
         
        </div>
        <div class="card-border-right"></div>
      </div>
    <div class="card-footer"></div>
  </div>
</div>



</body>
</html>

<?php

?>
