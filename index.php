<?php

session_start();

include_once("src/SessionStorage.php");
include_once("src/View.php");
include_once("src/HangmanController.php");

$sessionStorage = new SessionStorage();
$model = $sessionStorage->getModel();
$view = new View($model);
$controller = new HangmanController($view, $model);

$controller->playGame();

$sessionStorage->save($model);
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hangman</title>
</head>
<body>
    <h1>Hangman</h1>
    <?php
        $view->show();
    ?>
</body>
</html>