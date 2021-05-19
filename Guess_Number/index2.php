<?php

$low = rand(1,100);
echo $low."<br>";
$high = rand(1,100);
echo $high."<br>";
$chooseNumber = rand($low, $high);
echo $chooseNumber . "<br>";

function countGuess($low, $high, $guessNumber): int
{
    static $count = 0;
    $randGuess = rand($low, $high);
    var_dump($randGuess);
    if ($low > $high) {
        return countGuess($high,$low,$guessNumber);
    }
    if ($randGuess < $guessNumber) {
        $count++;
        return countGuess($randGuess + 1, $high, $guessNumber);
    } elseif ($randGuess > $guessNumber) {
        $count++;
        return countGuess($low, $randGuess - 1, $guessNumber);
    } else {
        $count++;
        return $count;
    }
}

echo "<br>" . countGuess($low, $high, $chooseNumber);