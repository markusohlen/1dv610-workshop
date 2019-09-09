<?php
class View {
    public function show() {
        echo $this->toHTML();
    }
    
    public function __construct(Hangman $hangman) {
        $this->model = $hangman;
    }

    public function playerGuessed() : bool {
       // var_dump($_GET);
        if(isset($_GET["guess"]) && strlen($_GET["guess"]) === 1) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getGuess() {
        return $_GET["guess"];
    }
    
    public function toHTML() : string {

        $guesses =  $this->model->getNumberOfGuesses();
        $ret = "
            <div>
                <h1>View</h1>
                    $guesses
                <form>
                    <input type='text' name='guess' value=''>
                    <input type='submit' name='submit' value='guess'>
                </form>
            </div>
    
            ";
        return $ret;
    }
}
