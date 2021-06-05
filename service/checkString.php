<?php

/*
    function to check if value is a string
*/
function checkString($value): string
{
    if (is_string($value) === true) {
        return 'this is a correct string';
    } else {
        return 'this is NOT a correct string';
    }
}
