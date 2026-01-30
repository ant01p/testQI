<?php
session_start();

if (!empty($_POST)) {
    $goodAnswer= [
        'answer3' => '18',
        'answer5' => '116',
        'answer6' => '1000',
    ];

    $answer = $_POST;
     if ($answer === $goodAnswer) {
        $score = 20;
    } else {
        $score = 0;
    }
    $_SESSION['score'] = $_SESSION['score'] + $score;
}

var_dump($_SESSION); echo '<br>';
var_dump($answer);
?>