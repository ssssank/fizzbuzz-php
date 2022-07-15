<?php

namespace FizzBuzz;

use function cli\line;
use function cli\prompt;

function runFizzBuzz()
{
    line("Welcome to Fizz Buzz!");
    line("Submit a number and get an answer!");
    while (true) {
        $number = prompt("Number");
        if (is_numeric($number)) {
            line(fizzbuzz((int) $number));
        } else {
            line('Please, input number');
        }
    }
}

function fizzbuzz($number)
{
    switch ($number) {
        case $number % 3 === 0 && $number % 5 === 0:
            return 'FizzBuzz';
            break;
        case $number % 3 === 0:
            return 'Fizz';
            break;
        case $number % 5 === 0:
            return 'Buzz';
            break;
        default:
            return $number;
            break;
    }
}
