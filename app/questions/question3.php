<?php
// ouvrir une session pour crée $_SESSION (toujours zu tout début du code)
session_start();

?>
<?php
// On verifie que le formulaire de question 1 a bien été soumis
if(!empty($_POST)) {
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
 $title = 'Question 3';
require ("../shared/OpenHtml.php");


?>
       
<main class="container_Q3">
    <div class="bloc_image">
        <h2> Question 3</h2>
        <img src="../images/dice.jpg" alt="image de cube">
    </div>
    <div class="reponses">
        <p>A quoi ressemblera le cube fini?</p>   
         <form action="question4.php" method="post">
            <label for="A"><input type="radio" name="answer" value="A"/>A</label> <br>
            <label for="B"><input type="radio" name="answer" value="B"/>B</label> <br>
            <label for="C"><input type="radio" name="answer" value="C"/>C</label> <br>
            <label for="D"><input type="radio" name="answer" value="D"/>D</label> <br>
            <input type="submit" value="Valider"> 
        </form>
    </div>
</main>

<?php
require ("../shared/CloseHtml.php");
?>