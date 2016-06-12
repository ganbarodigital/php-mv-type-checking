---
currentSection: v1
currentItem: exceptions
pageflow_prev_url: DataCannotBeEmpty.html
pageflow_prev_text: DataCannotBeEmpty class
pageflow_next_url: InvalidPcreRegex.html
pageflow_next_text: InvalidPcreRegex class
---

# DataMustBeEmpty

<div class="callout warning" markdown="1">
Not yet in a tagged release
</div>

## Description

`DataMustBeEmpty` is an exception. It is thrown when we receive a variable that is not `empty()`, but it must be empty.

## Public Interface

`DataMustBeEmpty` has the following public interface:

```php
// DataMustBeEmpty lives in this namespace
namespace GanbaroDigital\TypeChecking\V1\Exceptions;

// our base class and interfaces
use GanbaroDigital\ExceptionHelpers\V1\BaseExceptions\ParameterisedException;
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;

// return types from our method(s)
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\UnexpectedErrorStatus;

class DataMustBeEmpty
  extends ParameterisedException
  implements HttpRuntimeErrorException, TypeCheckingException
{
    // we map onto HTTP 500
    use UnexpectedErrorStatusProvider;

    /**
     * create a new exception, from a PHP variable
     *
     * @param  mixed $data
     *         the variable that must be empty
     * @param  string $fieldOrVarName
     *         the name of the variable
     * @param  array $callerFilter
     *         a list of classes to filter from the backtrace
     * @return DataMustBeEmpty
     *         an exception ready for you to throw
     */
    public static function newFromVar(
        $data,
        $fieldOrVarName = '\$data',
        array $callerFilter = []
    )

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

Call `DataMustBeEmpty::newFromVar()` to create a new throwable exception:

```php
// how to import
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;

throw DataMustBeEmpty::newFromVar(['hello!'], '\$data');
```

### Catching The Exception

`DataMustBeEmpty` extends or implements a rich set of classes and interfaces. You can use any of these to catch thrown exceptions.

```php
// example 1: we catch only DataMustBeEmpty exceptions
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;

try {
    throw DataMustBeEmpty::newFromVar(['hello!'], '\$data');
}
catch(DataMustBeEmpty $e) {
    // ...
}
```

```php
// example 2: catch all exceptions thrown by the Type-Checking Library
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;
use GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingException;

try {
    throw DataMustBeEmpty::newFromVar(['hello!'], '\$data');
}
catch(TypeCheckingException $e) {
    // ...
}
```

```php
// example 3: catch all exceptions where there was an unexpected problem
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;

try {
    throw DataMustBeEmpty::newFromVar(['hello!'], '\$data');
}
catch(HttpRequestErrorException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 4: catch all exceptions that map onto a HTTP status
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

try {
    throw DataMustBeEmpty::newFromVar(['hello!'], '\$data');
}
catch(HttpException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 5: catch all runtime exceptions
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;
use RuntimeException;

try {
    throw DataMustBeEmpty::newFromVar(['hello!'], '\$data');
}
catch(RuntimeException $e) {
    // ...
}
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\Reflection\V1\Exceptions\DataMustBeEmpty
     [x] Can instantiate
     [x] is TypeCheckingException
     [x] is RuntimeException
     [x] is HttpException
     [x] maps onto HTTP 500
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