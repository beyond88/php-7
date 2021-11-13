<?php
/**
 * Null coalesce operator
 */

$array = ['foo'=>'bar'];

//PHP5 style
$message = isset($array['foo']) ? $array['foo'] : 'not set';
echo $message.PHP_EOL;

//PHP7 style
$message = $array['foo'] ?? 'not set';
echo $message.PHP_EOL;