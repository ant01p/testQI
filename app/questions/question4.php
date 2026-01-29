<?php
session_start();
?>
<?php
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

 ?>