---
currentSection: v1
currentItem: exceptions
pageflow_prev_url: NoSuchClass.html
pageflow_prev_text: NoSuchClass class
pageflow_next_url: NoSuchInterface.html
pageflow_next_text: NoSuchInterface class
---

# NoSuchClassOrInterface

<div class="callout warning" markdown="1">
Not yet in a tagged release
</div>

## Description

`NoSuchClassOrInterface` is an exception. It is thrown when we have been given a `class` or an `interface` name that the autoloader cannot find.

<div class="callout info" markdown="1">
The Type Checking Library throws different exceptions when:

* a class cannot be found
* an interface cannot be found
* a trait cannot be found

This makes it easier to understand runtime errors when looking at your app's logs.
</div>

## Public Interface

`NoSuchClassOrInterface` has the following public interface:

```php
// NoSuchClassOrInterface lives in this namespace
namespace GanbaroDigital\TypeChecking\V1\Exceptions;

// our base class and interfaces
use GanbaroDigital\ExceptionHelpers\V1\BaseExceptions\ParameterisedException;
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;

// return types from our method(s)
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\UnexpectedErrorStatus;

class NoSuchClassOrInterface
  extends ParameterisedException
  implements HttpRuntimeErrorException, TypeCheckingException
{
    // we map onto HTTP 500
    use UnexpectedErrorStatusProvider;

    /**
     * create a new exception, from a PHP variable
     *
     * @param  mixed $className
     *         the class or interface name that doesn't exist
     * @param  string $fieldOrVarName
     *         the name of the variable
     * @param  array $callerFilter
     *         a list of classes to filter from the backtrace
     * @return NoSuchClassOrInterface
     *         an exception ready for you to throw
     */
    public static function newFromInputParameter(
        $className,
        $fieldOrVarName = '$className',
        array $callerFilter = []
    );

    /**
     * create a new exception, from a PHP variable
     *
     * @param  mixed $className
     *         the class or interface name that doesn't exist
     * @param  string $fieldOrVarName
     *         the name of the variable
     * @param  array $callerFilter
     *         a list of classes to filter from the backtrace
     * @return NoSuchClassOrInterface
     *         an exception ready for you to throw
     */
    public static function newFromVar(
        $className,
        $fieldOrVarName = '$className',
        array $callerFilter = []
    );

    /**
     * what was the data that we used to create the printable message?
     *
     * @return array
     */
    public function getMessageData();

    /**
     * what was the format string we used to create the printable message?
     *
     * @return string
     */
    public function getMessageFormat();

    /**
     * which HTTP status code do we map onto?
     *
     * @return UnexpectedErrorStatus
     */
    public function getHttpStatus();
}

```

## How To Use

### Creating Exceptions To Throw

Call one of the factory methods to create a new throwable exception:

```php
// how to import
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;

throw NoSuchClassOrInterface::newFromVar('UndefinedClass');
```

`NoSuchClassOrInterface` provides different factory methods for different situations:

Factory Method | When To Use
---------------|------------
`NoSuchClassOrInterface::newFromInputParameter()` | when `$className` was passed to your function or method as a parameter
`NoSuchClassOrInterface::newFromVar()` | when `$className` is the return value from calling a function or method, or is a value created by your function or method

### Catching The Exception

`NoSuchClassOrInterface` extends or implements a rich set of classes and interfaces. You can use any of these to catch thrown exceptions.

```php
// example 1: we catch only NoSuchClassOrInterface exceptions
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;

try {
    throw NoSuchClassOrInterface::newFromVar('UndefinedClass');
}
catch(NoSuchClassOrInterface $e) {
    // ...
}
```

```php
// example 2: catch all exceptions thrown by the Type-Checking Library
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;
use GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingException;

try {
    throw NoSuchClassOrInterface::newFromVar('UndefinedClass');
}
catch(TypeCheckingException $e) {
    // ...
}
```

```php
// example 3: catch all exceptions where there was an unexpected problem
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;

try {
    throw NoSuchClassOrInterface::newFromVar('UndefinedClass');
}
catch(HttpRequestErrorException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 4: catch all exceptions that map onto a HTTP status
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

try {
    throw NoSuchClassOrInterface::newFromVar('UndefinedClass');
}
catch(HttpException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 5: catch all runtime exceptions
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;
use RuntimeException;

try {
    throw NoSuchClassOrInterface::newFromVar('UndefinedClass');
}
catch(RuntimeException $e) {
    // ...
}
```

### Exception Data

`NoSuchClassOrInterface` is a [`ParameterisedException`](http://ganbarodigital.github.io/php-mv-exception-helpers/V1/BaseExceptions/ParameterisedException.html). It contains extra data for you to write to your logs or inspect in your debugger of choice.

```php
try {
    throw NoSuchClassOrInterface::newFromInputParameter('UndefinedClass');
}
catch (NoSuchClassOrInterface $e) {
    // extract the extra data
    // getMessagedData() returns a PHP array
    $exData = $e->getMessageData();
}
```

Here's the full list of the extra data available in this exception.

Parameter | Type | Description
----------|------|------------
`thrownBy` | [`CodeCaller`](http://ganbarodigital.github.io/php-mv-exception-helpers/V1/Callers/CodeCaller.html) | details of the function or method that is throwing the exception
`thrownByName` | string | human-readable summary of `thrownBy`
`calledBy` | [`CodeCaller`](http://ganbarodigital.github.io/php-mv-exception-helpers/V1/Callers/CodeCaller.html) | details of the function or method that has called the `thrownBy` function or method
`calledByName` | string | human-readable summary of `calledBy`
`fieldOrVarName` | string | the `$fieldOrVarName` passed into the factory method
`className` | mixed | the `$className` passed into the factory method

Here's a list of the extra data added by each factory method.

Factory Method | Extra Data Added
---------------|-----------------
`NoSuchClassOrInterface::newFromInputParameter()` | `thrownBy`, `thrownByName`, `calledBy`, `calledByName`, `fieldOrVarName`, `className`
`NoSuchClassOrInterface::newFromVar()` | `thrownBy`, `thrownByName`, `fieldOrVarName`, `className`

## Class Contract

Here is the contract for this class:

    GanbaroDigital\Reflection\V1\Exceptions\NoSuchClassOrInterface
     [x] Can instantiate
     [x] is TypeCheckingException
     [x] is RuntimeException
     [x] is HttpException
     [x] maps onto HTTP 500
     [x] Can create from input parameter
     [x] Can create from variable

Class contracts are built from this class's unit tests.

<div class="callout success">
Future releases of this class will not break this contract.
</div>

<div class="callout info" markdown="1">
Future releases of this class may add to this contract. New additions may include:

* clarifying existing behaviour (e.g. stricter contract around input or return types)
* add new behaviours (e.g. extra class methods)
</div>

<div class="callout warning" markdown="1">
When you use this class, you can only rely on the behaviours documented by this contract.

If you:

* find other ways to use this class,
* or depend on behaviours that are not covered by a unit test,
* or depend on undocumented internal states of this class,

... your code may not work in the future.
</div>


## Notes

None at this time.

## See Also

* [`ParameterisedException` class](http://ganbarodigital.github.io/php-mv-exception-helpers/V1/BaseExceptions/ParameterisedException.html)
* [mapping exceptions onto HTTP status codes](http://ganbarodigital.github.io/php-http-status/usage/http-exceptions.html)
