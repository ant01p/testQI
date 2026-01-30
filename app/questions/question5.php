<?php
session_start();

if (!empty($_POST)) {
    $answer = $_POST['answer'];
     if ($answer === 'Natalie') {
        $score = 20;
    } else {
        $score = 0;
    }
    $_SESSION['score'] = $_SESSION['score'] + $score;
}
var_dump($_SESSION);

//header
 $title = 'Question 5';
require ("../shared/OpenHtml.php");
//footer
require ("../shared/CloseHtml.php");
?>

<main>
<h2>Question 5</h2>
<p>Quels sont les nombres qui n'ont pas de racine carrée entière?</p>

<form method="post" action="../result/result.php">

    <div>
    <input type="checkbox" value="1" name="answer1" />
    <label for="answer1">1</label>
  </div>
  <div>
    <input type="checkbox" value="9" name="answer2" />
    <label for="answer2">9</label>
  </div>
  <div>
    <input type="checkbox" value="18" name="answer3" />
    <label for="answer3">18</label>
  </div>
  <div>
    <input type="checkbox" value="49" name="answer4" />
    <label for="answer4">49</label>
  </div>
  <div>
    <input type="checkbox" value="116" name="answer5" />
    <label for="answer5">116</label>
  </div>
  <div>
    <input type="checkbox" value="1000" name="answer6" />
    <label for="answer6">1000</label>
  </div>
  <p>
    <input type="submit" value="Valider" />
  </p>
</main>