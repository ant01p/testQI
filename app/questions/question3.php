<?php
// ouvrir une session pour crée $_SESSION (toujours zu tout début du code)
session_start () ;
// On verifie que le formulaire de question 1 a bien été soumis
if(!empty ($_POST)) {
    // Récupére la réponse donnée dans le formulaire
    $answer = $_POST['answer'];
        // Comparé la réponse et j'attrbue le score en fonction de sa validité
    if ($answer === '1500') {
        $score=20;
    } else {
        $score=0;
    }
        // Stocke la réponse dans la session (attention à bien ouvrir une session avec session_start)
    $_SESSION['score'] = $_SESSION['score'] + $score;
}

var_dump($_SESSION);

?>