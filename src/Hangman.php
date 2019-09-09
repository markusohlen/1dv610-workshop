<?php

class Hangman {
    private $guesses = 0;
    private $secretWord = "mansion";
    private $guessedLetters = array();
    public $alreadyGuessed = false;

    public function __construct($guesses, $secretWord, $guessedLetters) {
        $this->guesses = $guesses;
        $this->secretWord = $secretWord;
        $this->guessedLetters = $guessedLetters;
    }


    public function doGuess($guessedLetter) {
        // Har man gissat bokstaven förut
        if(isset($this->guessedLetters[$guessedLetter])) {
            $this->alreadyGuessed = true;
            // Här vill vi jämföra med secretWord för att komma framåt i spelet
            return;
        } else {
            // Här skriver vi reglerna för vad som händer när man gissar en bokstav
            // Vi har inte någon funktion för secretWord
            $this->alreadyGuessed = false;
            $this->guessedLetters[$guessedLetter] = $guessedLetter;

            echo count($this->guessedLetters);
            $this->guesses += 1;
        }
    }

    public function getNumberOfGuesses() {
        return $this->guesses;
    }

    public function getGuessedLetters() {
        return $this->guessedLetters;
    }

    public function getSecretWord() {
        return $this->secretWord;
    }
}