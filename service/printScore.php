<?php

/*  function to print stars and circles
    parameters:
        $maxScore: maximum of possible stars or circles to print
        $score: sum of points getted from questionnary
*/
function printScore(int $maxScore, int $score): string
{
    $starsAndCircles = '';
    for ($i = 1; $i <= $maxScore; $i++) {
        if ($i <= $score) {
            $starsAndCircles .= '⭐';
        } else {
            $starsAndCircles .= '⚫';
        }
    }
    return $starsAndCircles;
}
