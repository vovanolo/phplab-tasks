<?php

/**
 * The $airports variable contains array of arrays of airports (see airports.php)
 * What can be put instead of placeholder so that function returns the unique first letter of each airport name
 * in alphabetical order
 *
 * Create a PhpUnit test (GetUniqueFirstLettersTest) which will check this behavior
 *
 * @param array $airports
 * @return string[]
 */
function getUniqueFirstLetters(array $airports)
{
    $alphabet = [];
    foreach ($airports as $airport) {
        array_push($alphabet, $airport['name'][0]);
    }
    sort($alphabet);

    return array_values(array_unique($alphabet));
}

function filterByFirstLetter(array $airports, $letter):array{
    return array_values(array_filter($airports, function ($airports) use($letter) {
        return strtolower($airports['name'][0]) == strtolower($letter);
    }));
}

function filterByState(array $airports, $state){
    return array_values(array_filter($airports, function ($airports) use($state) {
        return strtolower($airports['state']) == strtolower($state);
    }));
}

function sortByKey($key) {
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}