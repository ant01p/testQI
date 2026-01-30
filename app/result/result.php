<?php
session_start();

if (!empty($_POST)) {
    $answer = $_POST['answer'];
     if ($answer === '18, 116, 1000') {
        $score = 20;
    } else {
        $score = 0;
    }
    $_SESSION['score'] = $_SESSION['score'] + $score;
}
var_dump($_SESSION);