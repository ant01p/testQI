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

<form method="post" action="question5.php">

    <div>
    <input type="checkbox" id="1" name="answer" checked />
    <label for="1">1</label>
  </div>
  <div>
    <input type="checkbox" id="9" name="answer" />
    <label for="9">9</label>
  </div>
  <div>
    <input type="checkbox" id="18" name="answer" checked />
    <label for="18">18</label>
  </div>
  <div>
    <input type="checkbox" id="49" name="answer" />
    <label for="49">49</label>
  </div>
  <div>
    <input type="checkbox" id="116" name="answer" />
    <label for="116">116</label>
  </div>
  <div>
    <input type="checkbox" id="1000" name="answer" />
    <label for="1000">1000</label>
  </div>
  <p>
    <input type="submit" value="Valider" />
  </p>
</main>