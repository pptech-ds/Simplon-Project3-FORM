<?php
/*  function to get final score after customer submit
    parameters:
        $arrayScore: array of points for each question, key=questionName, value=points
*/
function getScore(array $arrayScore): int
{
    $score = 0;
    foreach ($arrayScore as $key => $value) {
        if (
            $key === 'question1' ||
            $key === 'question2' ||
            $key === 'question3'
        ) {
            $score += $value;
        }
    }
    return $score;
}
