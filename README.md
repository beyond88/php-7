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

## The space ship operator
Instead of returning a typical true/false value, the space ship operator returns one of the follow values based on the result of the evaluation:<br>

- 0 when both values are equal
- -1 when the left value is less than the right value
- 1 if the left value is greater than the right value

## Throwables
A big change in PHP 7 is the fact that errors are no longer raised the way they used to be raised. Errors now behave in a similar way as exceptions. They both inherit from the Throwable interface.

This means that errors can now be caught in a try/catch block. You can catch both exceptions and errors as Throwables, but you can also catch errors as Error objects.

There are event different kinds of errors we can catch:<br>

- ArithmeticError
- AssertionError
- DivisionByZeroError
- ParseError
- TypeError

## Level support for the dirname() function

The dirname function is used more often than you would think. It is the ideal function to refer to directories in a relative way.

But when you want to go a couple of levels up, you end up nesting dirname calls and that will eventually lead to confusion.

As of PHP 7 the dirname function has a second argument that indicates how many levels your going up the directory tree. If you don’t enter a value, 1 is the default.

## The Integer division function

The intdiv function returns the integer value of a division whereas regular divisions can result in a float being returned.

## Arrow function
Short closures, also called arrow functions, are a way of writing shorter functions in PHP. This notation is useful when passing closures to functions like ```array_map``` or ```array_filter```.

```

// A collection of Post objects
$posts = [/* … */];

$ids = array_map(fn($post) => $post->id, $posts);

```

Let's summarize how short closures can be used.

- They start with the fn keyword
- They can only have one expression, which is the return statement
- No return keyword allowed
- Arguments and return types can be type hinted











