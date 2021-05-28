<?php

function testEcho(string $testParam) :string
{
    return 'return from function testEcho in functions.php'.$testParam;
}

function getScore(array $arrayScore) :int
{
    $score = 0;
    foreach ($arrayScore as $key => $value) { 
        $score += {$value};
    }
    return $score;
}

?>