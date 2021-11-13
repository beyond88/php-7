# PHP-7
The core features of PHP 7 which you must know and should use most wildly.<br>
Release date: 3 December 2015

## Type-hint
You were already able to declare type hints for classes, callables, and arrays in PHP 5. PHP 7 introduces the idea of scalar type hints. This means you can now say that you want a string, an int, a float, or a bool data type, both for parameters and return types. The syntax is roughly similar to what can be found in other languages.

Contrary to class type hints, you can also choose between two modes: the strict mode and the non-strict mode, the latter being the default. This means PHP will try to cast the values to the desired type. The casts will happen silently if there is no loss of information, otherwise, a warning will be raised. This can lead to the same strange results you can have with string to numbers conversion or true and false values.

## Return type declaration
Whereas type hints ensure input consistency, return type declarations ensure output consistency.

## Anonymous classes
Anonymous classes are useful for simple one-off objects. With anonymous classes you can define a class and instantiate an object inline.

## Closure
Closures are anonymous functions that are declared inline and assigned to a variable. It can be used as a callback for later execution. In PHP 5 it was already possible to bind an object to the scope of the closure as if it was a method.
The “call” method is one of the PHP 7 features that was introduced to simplify the process.

## The null coalesce operator
The null coalesce operator is a shorthand for checking if a value is set and not null within inline comparisons. Instead of doing the same old “isset” check over and over again, just use “??” to return the value if it is set (and not null) or an alternative value instead.





