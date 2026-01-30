<?php
// ouvrir une session pour crée $_SESSION (toujours zu tout début du code)
session_start();

if (!empty($_POST)) {   // On verifie que le formulaire de question 1 a bien été soumis

    // Récupére la réponse donnée dans le formulaire
    $answer = $_POST['answer'];

    // transformer la fréponse en minuscule pour que DIMANCHE ou Dimanche ou diManche soit valide
    $answer = strtolower($answer);

    // Comparé la réponse et j'attrbue le score en fonction de sa validité
    if ($answer === 'dimanche') {
        $score = 20;
    } else {
        $score = 0;
    }

    // Stocke la réponse dans la session (attention à bien ouvrir une session avec session_start)
    $_SESSION['score'] = $score;
}

/*
code non détaillé
if (!empty($_POST)) {
    $answer = $_POST['answer'];
    $answer = strtolower($answer);
    if ($answer === 'dimanche') {
        $_SESSION['points'] =20;
    } else {
      $_SESSION['points'] = 0;
    } 
}
*/

$title = 'Question 2';
require ("../shared/OpenHtml.php");
var_dump($_SESSION);
?>

<main>

 <h2>Question 2</h2>

 <p>Qu'est-ce qu'un quart de deux tiers de 9000?</p>

 <form action="question3.php" method="post">
    <input type="number" name="answer" min='1000' max='3000' step='500' required> <br>
    <input type="submit" value="Valider"> 
 </form>

</main>

<?php
require ("../shared/CloseHtml.php");
?>

