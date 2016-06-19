---
currentSection: v1
currentItem: exceptions
pageflow_prev_url: UnsupportedValue.html
pageflow_prev_text: UnsupportedValue class
---

# TypeCheckingExceptions

<div class="callout warning" markdown="1">
Not yet in a tagged release
</div>

## Description

`TypeCheckingExceptions` is a [`FactoryList`](http://ganbarodigital.github.io/php-mv-di-containers/V1/Interfaces/FactoryList.html). It provides factory methods for all exceptions that the _Type-Checking Library_ can throw.

## Public Interface

`TypeCheckingExceptions` has the following public interface.

```php
// TypeCheckingExceptions lives in this namespace
namespace GanbaroDigital\TypeChecking\V1\Exceptions;

// our base classes and interfaces
use GanbaroDigital\DIContainers\V1\FactoryList\Containers\FactoryListContainer;
use GanbaroDigital\DIContainers\V1\Interfaces\FactoryList;

class TypeCheckingExceptions extends FactoryListContainer
{
    public function __construct();

    /**
     * return the full list of factories as a real PHP array
     *
     * @return array
     * @inheritedFrom FactoryList
     */
    public function getList();
}
```

## How To Use

### Construction

Here's how to build a new instance of `TypeCheckingExceptions`.

```php
use GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingExceptions;

$diContainer = new TypeCheckingExceptions;
```

### Creating A New Exception

Treat `TypeCheckingExceptions` as a PHP array that contains factory methods. Each factory's name is the same _class::method_ that you would use to call the exception's factory directly.

```php
use GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingExceptions;

$diContainer = new TypeCheckingExceptions;

throw $diContainer['DataCannotBeEmpty::newFromVar']([]);
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingExceptions
     [x] Can instantiate
     [x] is FactoryList
     [x] has factory for DataCannotBeEmpty newFromInputParameter
     [x] has factory for DataCannotBeEmpty newFromVar
     [x] has factory for DataMustBeEmpty newFromInputParameter
     [x] has factory for DataMustBeEmpty newFromVar
     [x] has factory for InvalidPcreRegex newFromInputParameter
     [x] has factory for InvalidPcreRegex newFromVar
     [x] has factory for NoSuchClass newFromInputParameter
     [x] has factory for NoSuchClass newFromVar
     [x] has factory for NoSuchClassOrInterface newFromInputParameter
     [x] has factory for NoSuchClassOrInterface newFromVar
     [x] has factory for NoSuchInterface newFromInputParameter
     [x] has factory for NoSuchInterface newFromVar
     [x] has factory for NoSuchTrait newFromInputParameter
     [x] has factory for NoSuchTrait newFromVar
     [x] has factory for UnsupportedType newFromInputParameter
     [x] has factory for UnsupportedType newFromVar
     [x] has factory for UnsupportedValue newFromInputParameter
     [x] has factory for UnsupportedValue newFromVar

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
