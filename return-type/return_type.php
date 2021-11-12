<?php
/**
 * Return type declarations
 */

function add(int $a, int $b): int{
    return (string)($a + $b);
}

var_dump(add(1,2));