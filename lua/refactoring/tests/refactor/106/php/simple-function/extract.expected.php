<?php

function foo (
    $a, $test, $test_other
) {
        for ($idx = $test - 1; $idx < $test_other; ++$idx) {
        print $idx;
        print $a;
    }
}


function simple_function($a)
{
    $test = 1;
    $test_other = 11;
    foo($a, $test, $test_other);
}
