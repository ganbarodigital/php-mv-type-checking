---
currentSection: v1
currentItem: exceptions
pageflow_next_url: DataCannotBeEmpty.html
pageflow_next_text: DataCannotBeEmpty class
---

# Exceptions

## Purpose

These are the exceptions that this library can throw.

## Exceptions List

Class | Description
------|------------
[`DataCannotBeEmpty`](DataCannotBeEmpty.html) | thrown when a variable is `empty()`, but that is not permitted
[`DataMustBeEmpty`](DataMustBeEmpty.html) | thrown when a variable is not `empty()`, but that is not permitted
[`InvalidPcreRegex`](InvalidPcreRegex.html) | thrown when we've been given a PCRE regex that cannot be compiled
[`NoSuchClass`](NoSuchClass.html) | thrown when we've been given a class name that the autoloader cannot find
[`NoSuchClassOrInterface`](NoSuchClassOrInterface.html) | thrown when we've been given a class or interface name that the autoloader cannot find
[`NoSuchInterface`](NoSuchInterface.html) | thrown when we've been given an interface that the autoloader cannot find
[`NoSuchTrait`](NoSuchTrait.html) | thrown when we've been given a trait that the autoloader cannot find
[`UnsupportedType`](UnsupportedType.html) | thrown when you pass the wrong data type into one of the [Requirements](../Requirements/index.html) classes
[`UnsupportedValue`](UnsupportedValue.html) | thrown when you pass in a parameter that has the right data type, but a value that can't be accepted

## Exceptions Container

[`TypeCheckingExceptions`](TypeCheckingExceptions.html) provides a full list of exception factories as a [`FactoryList`](http://ganbarodigital.github.io/php-mv-di-containers/V1/Interfaces/FactoryList.html).

Click on the name of an exception to see full details.
