<?php
/**
 * Closure::call()
 */

class Foo
{
    private $foo = 'bar';
}

$getFooCallback = function() {
    return $this->foo;
};

//PHP5 style
$binding = $getFooCallback->bindTo(new Foo,'Foo');
echo $binding().PHP_EOL;

//PHP7 style
echo $getFooCallback->call(new Foo).PHP_EOL;