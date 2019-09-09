<?php
include_once("Hangman.php");
class SessionStorage {
    
    private $model;
    
    public function save(Hangman $model) {
        $_SESSION["guesses"] = $model->getNumberOfGuesses();
    }

    public function __construct() {
        if (isset($_SESSION["guesses"]) == false) {
            // Startar nytt spel
            $_SESSION["guesses"] = 0;
            $_SESSION["secretWord"] = "mansion";
            $_SESSION["guessedLetters"] = array();
        }
        $this->model = new Hangman($_SESSION["guesses"], $_SESSION["secretWord"], $_SESSION["guessedLetters"]);
    }

    public function getModel() {
        return $this->model;
    }
}