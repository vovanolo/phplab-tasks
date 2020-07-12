<?php
/**
 * The $minute variable contains a number from 0 to 59 (i.e. 10 or 25 or 60 etc).
 * Determine in which quarter of an hour the number falls.
 * Return one of the values: "first", "second", "third" and "fourth".
 * Throw InvalidArgumentException if $minute is negative of greater then 60.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $minute
 * @return string
 * @throws InvalidArgumentException
 */
function getMinuteQuarter(int $minute)
{
    if($minute > 0 && $minute <= 15){
        return "first";
    } elseif ($minute >= 16 && $minute <= 30){
        return "second";
    }elseif ($minute >= 31 && $minute <= 45){
        return "third";
    }elseif ($minute >= 46 && $minute <= 59 || $minute === 0){
        return 'fourth';
    }elseif($minute >= 60 || $minute < 0){
        throw new InvalidArgumentException('you enter wrong number - '.$minute);
    }
}

/**
 * The $year variable contains a year (i.e. 1995 or 2020 etc).
 * Return true if the year is Leap or false otherwise.
 * Throw InvalidArgumentException if $year is lower then 1900.
 * @see https://en.wikipedia.org/wiki/Leap_year
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $year
 * @return boolean
 * @throws InvalidArgumentException
 */
function isLeapYear(int $year)
{
    if(!($year % 4) && ($year % 100 || !($year % 400))){
        return true;
    }
    elseif ($year < 1990){
        throw new InvalidArgumentException('you enter wrong year and the year is - '.$year);
    }
    else{
        return false;
    }
}

/**
 * The $input variable contains a string of six digits (like '123456' or '385934').
 * Return true if the sum of the first three digits is equal with the sum of last three ones
 * (i.e. in first case 1+2+3 not equal with 4+5+6 - need to return false).
 * Throw InvalidArgumentException if $input contains more then 6 digits.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  string  $input
 * @return boolean
 * @throws InvalidArgumentException
 */
function isSumEqual(string $input)
{
    if(strlen($input)>6 || strlen($input)<6){
        throw new InvalidArgumentException('you enter too many digits');
    }
    $sum_first = 0;
    $sum_last  = 0;
    for ($i = 0; $i < 3; $i++){
        $sum_first += $input[$i];
    }
    for ($i = 3; $i < 6; $i++){
        $sum_last += $input[$i];
    }
    if ($sum_last === $sum_first){
        return true;
    }
    else{
        return false;
    }
}