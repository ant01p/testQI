<?php
session_start();

// On verifie que le formulaire de question 3 a bien été soumis
if(!empty($_POST)) {
    // Récupére la réponse donnée dans le formulaire
$answer = $_POST['answer'];
    // Comparé la réponse et j'attrbue le score en fonction de sa validité
    if ($answer === 'C') {
        $score = 20;
    } else {
        $score = 0;
    }
    // Stocke la réponse dans la session (attention à bien ouvrir une session avec session_start)
 $_SESSION['score'] = $_SESSION['score'] + $score;
}
 var_dump($_SESSION);

 $title = 'Question 4';
require ("../shared/OpenHtml.php");
?>
<main>
<h2>Question 4</h2>
<p>Kate, Joanna et Natalie sont toutes les trois soeurs. Si les affirmations suivantes sont toutes vraies, laquelle d'entre elles est la plus jeune?</p>

<ul>
    <li>Kate est la plus agée.</li>
    <li>Natalie n'est pas la plus agée.</li>
    <li>Joanna n'est pas la plus jeune.</li>
</ul>

<form method="post" action="question5.php">

  <p>
    <label for="soeurs">Réponse&nbsp;:</label>
    <select name="answer" id="soeurs">
      <option>--Choisir la bonne réponse--</option>
      <option>Kate</option>
      <option>Natalie</option>
      <option>Joanna</option>
    </select>
  </p>
  <p>
    <input type="submit" value="Valider" />
  </p>
</form>

</main>

<?php
require ("../shared/CloseHtml.php");
?>
