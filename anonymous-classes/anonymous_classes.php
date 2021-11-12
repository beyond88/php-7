<?php
/**
 * Anonymous classes
 */

$foo = new class {
    public function foo() {
        return "bar";
    }
};

var_dump($foo,$foo->foo());