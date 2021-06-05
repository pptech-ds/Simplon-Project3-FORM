<?php

/*
    function to check if value is a string
*/
function checkString($value): string
{
    if (is_string($value) === false) {
        return "Erreur : ce n'est pas uen chaine de caractère";
    }
}
