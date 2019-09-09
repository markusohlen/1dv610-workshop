<?php

class Hangman {
    private $guesses = 0;
    private $secretWord = "mansion";
    private $guessedLetters = array();

    public function __construct($guesses, $secretWord, $guessedLetters) {
        $this->guesses = $guesses;
        $this->secretWord = $secretWord;
        $this->guessedLetters = $guessedLetters;
    }


    public function doGuess($guessedLetter) {
        // Har man gissat bokstaven förut
        if(isset($this->guessedLetters[$guessedLetter])) {
            return;
        }
        else {
            $this->guesses += 1;
            $this->guessedLetters 
            // Här skriver vi reglerna för vad som händer när man gissar en bokstav
            // VI behöver lagra undan vilken bokstav som har gissats
            // Vi har inte någon funktion för secretWord
        }
        
    }

    public function getNumberOfGuesses() {
        return $this->guesses;
    }
}