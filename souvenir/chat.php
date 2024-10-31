<?php
$secretNumber = 7;
$guess = 0;

while ($guess != $secretNumber) {
    $guess = (int)readline("Guess the number (1-10): ");
    if ($guess < $secretNumber) {
        echo "Too low! Try again.\n";
    } elseif ($guess > $secretNumber) {
        echo "Too high! Try again.\n";
    } else {
        echo "Congratulations! You guessed it!\n";
    }
}
?>
