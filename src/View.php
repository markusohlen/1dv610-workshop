<?php
class View {
    public function show() {
        echo $this->toHTML();
    }
    
    public function __construct(Hangman $hangman) {
        $this->model = $hangman;
    }

    public function playerGuessed() : bool {
        // var_dump($_GET["guess"]);
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

    // Här vill vi nollställa alla värden
    
    // public function resetGame() {
    //     if (isset($_GET["reset"])) {
    //         echo "Resetting...";
    //         session_destroy();
    //     }
    // }

    public function generateMessage() {
        if (isset($_GET["guess"]) && (strlen($_GET["guess"]) > 1)) {
            return "<p>One character allowed! Make a guess again.</p>";
        } else if ($this->model->alreadyGuessed) {
            return "You have already guessed this character";
        }

        return "<p>Make a guess</p>";
    }
    
    public function toHTML() : string {
        $guesses =  $this->model->getNumberOfGuesses();
        $message = $this->generateMessage();
        $ret = "
            <div>
                <h1>View</h1>
                    $guesses
                    $message
                <form>
                    <input type='text' name='guess' value=''>
                    <input type='submit' name='submit' value='guess'>
                </form>

                <!-- <form method='get'>
                    <button type='button' name='reset'>Reset</button>
                </form> -->
            </div>
    
            ";
        return $ret;
    }
}
