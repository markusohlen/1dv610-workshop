<?php
include_once("Hangman.php");

class HangmanController {
    private $model;
    private $view;

    public function __construct(View $view, Hangman $model) {
        $this->model = $model;
        $this->view = $view;
    }

    public function playGame() {
        if($this->view->playerGuessed() === true) {
            $guessedLetter = $this->view->getGuess();
            $this->model->doGuess($guessedLetter);
        }
    }
}