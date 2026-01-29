<?php
$title = 'Question 1';
require ("../shared/OpenHtml.php");
?>

<main>

 <h2>Question 1</h2>

 <p>Quel jour serons-nous demain si mercredi était il y a trois jours?</p>

 <form action="question2.php" method="post">
    <input type="text" name="answer"   required> <br>
    <input type="submit" value="Valider"> 
 </form>

</main>

<?php
require ("../shared/CloseHtml.php");
?>


