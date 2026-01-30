<?php

function isPrime($number) {
    if ($number > 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;

}

$testNumber = 3;
if (isPrime($testNumber)) {
    echo "$testNumber é um número primo.";
} else {
    echo "$testNumber não é um número primo.";
}