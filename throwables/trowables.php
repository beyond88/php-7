<?php
/**
 * Throwable interface
 */


//Error as Throwable
try {
    sqdf();
} catch (Throwable $t) {
    echo "Throwable: ".$t->getMessage().PHP_EOL;
}

//Exception as Throwable
try {
    throw new Exception("Bla");
} catch (Throwable $t) {
    echo "Throwable: ".$t->getMessage().PHP_EOL;
}

//Error
try {
    sqdf();
} catch (Error $e) {
    echo "Error: ".$e->getMessage().PHP_EOL;
} catch (Exception $e) {
    echo "Exception: ".$e->getMessage().PHP_EOL;
}

//Exception
try {
    throw new Exception("Bla");
} catch (Error $e) {
    echo "Error: ".$e->getMessage().PHP_EOL;
} catch (Exception $e) {
    echo "Exception: ".$e->getMessage().PHP_EOL;
}

//Type error
try {
    function add(int $a, int $b):int {
        return $a + $b;
    }
    echo add(array(), array());
} catch (TypeError $t) {
    echo "Type error: ".$t->getMessage().PHP_EOL;
}