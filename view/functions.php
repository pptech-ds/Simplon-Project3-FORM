<?php
// file containing all php functions

//  function test to see functions.php is correctly called into included page
function testEcho(string $testParam) :string
{
    return 'return from function testEcho in functions.php'.$testParam;
}

/*  function to get final score after customer submit
    parameters:
        $arrayScore: array of points for each question, key=questionName, value=points
*/
function getScore(array $arrayScore) :int
{
    $score = 0;
    foreach ($arrayScore as $key => $value) { 
        if(($key === 'question1') || ($key === 'question2') || ($key === 'question3')){
            $score += $value;
        }
    }
    return $score;
}

/*  function to print stars and circles
    parameters:
        $maxScore: maximum of possible stars or circles to print
        $score: sum of points getted from questionnary
*/ 
function printScore(int $maxScore, int $score) :string
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

/*
    function to check if value is a string
*/
function checkString($value) :bool
{
    $isString = false;
    if(is_string($value)){
        $isString = true;
        // echo 'this is a string';
    } else{
        // echo 'this is NOT a string';    
    }
    return $isString;
}

/*
    function to check if value is a string
*/
function checkPhoneNumberPattern($value) :bool
{   
    echo '<br>';
    var_dump(preg_match("0[1-9][0-9]{8}", $value));
    echo '<br>';
    
    $pattern="0[1-9][0-9]{8}";

    $isPhoneNumber = false;
    if(preg_match("0[1-9][0-9]{8}", $value)){
        $isPhoneNumber = true;
        echo 'this is a correct phone number';
    } else{
        echo 'this is NOT a correct phone number';    
    }
    return $isPhoneNumber;
}

?>