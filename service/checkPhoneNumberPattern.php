<?php

/*
    function to check if value is a string
*/
function checkPhoneNumberPattern($value): string
{
    if (is_numeric($value) && strlen($value) === 10) {
        return 'this is a correct phone number';
    } else {
        return 'this is NOT a correct phone number';
    }
}
