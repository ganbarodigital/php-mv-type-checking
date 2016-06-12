---
currentSection: v1
currentItem: exceptions
pageflow_prev_url: index.html
pageflow_prev_text: Exceptions List
pageflow_next_url: DataMustBeEmpty.html
pageflow_next_text: DataMustBeEmpty class
---

# DataCannotBeEmpty

<div class="callout warning" markdown="1">
Not yet in a tagged release
</div>

## Description

`DataCannotBeEmpty` is an exception. It is thrown when we receive a variable that is `empty()`, but it is not allowed to be empty.

## Public Interface

`DataCannotBeEmpty` has the following public interface:

```php
// DataCannotBeEmpty lives in this namespace
namespace GanbaroDigital\TypeChecking\V1\Exceptions;

// our base class and interfaces
use GanbaroDigital\ExceptionHelpers\V1\BaseExceptions\ParameterisedException;
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;

// return types from our method(s)
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\UnexpectedErrorStatus;

class DataCannotBeEmpty
  extends ParameterisedException
  implements HttpRuntimeErrorException, TypeCheckingException
{
    // we map onto HTTP 500
    use UnexpectedErrorStatusProvider;

    /**
     * create a new exception, from a PHP variable
     *
     * @param  mixed $data
     *         the variable that cannot be empty
     * @param  string $fieldOrVarName
     *         the name of the variable
     * @param  array $callerFilter
     *         a list of classes to filter from the backtrace
     * @return DataCannotBeEmpty
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

Call `DataCannotBeEmpty::newFromVar()` to create a new throwable exception:

```php
// how to import
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;

throw DataCannotBeEmpty::newFromVar([], '\$data');
```

### Catching The Exception

`BadRequirement` extends or implements a rich set of classes and interfaces. You can use any of these to catch thrown exceptions.

```php
// example 1: we catch only BadRequirement exceptions
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;

try {
    throw DataCannotBeEmpty::newFromVar([], '\$data');
}
catch(BadRequirement $e) {
    // ...
}
```

```php
// example 2: catch all exceptions thrown by the Type-Checking Library
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;
use GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingException;

try {
    throw DataCannotBeEmpty::newFromVar([], '\$data');
}
catch(TypeCheckingException $e) {
    // ...
}
```

```php
// example 3: catch all exceptions where there was an unexpected problem
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;

try {
    throw DataCannotBeEmpty::newFromVar([], '\$data');
}
catch(HttpRequestErrorException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 4: catch all exceptions that map onto a HTTP status
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

try {
    throw DataCannotBeEmpty::newFromVar([], '\$data');
}
catch(HttpException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 5: catch all runtime exceptions
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;
use RuntimeException;

try {
    throw DataCannotBeEmpty::newFromVar([], '\$data');
}
catch(RuntimeException $e) {
    // ...
}
```

## Notes

None at this time.

## See Also

* [`ParameterisedException` class](http://ganbarodigital.github.io/php-mv-exception-helpers/V1/BaseExceptions/ParameterisedException.html)
* [mapping exceptions onto HTTP status codes](http://ganbarodigital.github.io/php-http-status/usage/http-exceptions.html)