---
currentSection: v1
currentItem: Checks
pageflow_next_url: IsArray.html
pageflow_next_text: IsArray class
---

# Checks

## Purpose

These are utilities for checking the type and / or content of a PHP variable or value.

* Each check returns `true` or `false`.
* Checks never throw exceptions (use a [Requirement](../Requirements/index.html) or an [Assurance](../Assurances/index.html)) for that.

<div class="callout info" markdown="1">
#### Do We Still Need These In PHP 7?

PHP 7.0 introduced [type declarations](http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration). They allow you to strictly declare a type for each variable passed into your function or method. You can - and should - use them to transfer some of the burden of robustness onto the PHP runtime engine.

Unlike PHP type declarations, our Checks are available to use anywhere in your code. They can be combined to build more flexible and more detailed checking than is possible with PHP type declarations alone.

For checks that can't be done in a single line of PHP code, our Checks ensure that your robustness checks are consistent across your entire code base.

And, as the PHP language evolves, we'll make sure that the semantic meaning of these checks remains the same, so that you don't have to update the robustness checks in your older code.
</div>

## Class List

Class | Description
------|------------
[`IsArray`](IsArray.html) | can the data be used with PHP's `array_xxx()` functions?
[`IsAssignable`](IsAssignable.html) | can we use PHP object property notation on the data?
[`IsBoolean`](IsBoolean.html) | can the data be used as a PHP `boolean`?
[`IsCallable`](IsCallable.html) | can the data be used as a PHP function?
[`IsCompatibleWith`](IsCompatibleWith.html) | is the data compatible with a given class or interface?
[`IsDefinedClass`](IsDefinedClass.html) | is the data a valid class name?
[`IsDefinedInterface`](IsDefinedInterface.html) | is the data a valid interface name?
[`IsDefinedObjectType`](IsDefinedObjectType.html) | is the data a valid class or interface name?
[`IsDefinedTrait`](IsDefinedTrait.html) | is the data a valid trait name?
[`IsDouble`](IsDouble.html) | can we use the data as a floating point number?
[`IsEmpty`](IsEmpty.html) | does the data have any useful content at all?
[`IsIndexable`](IsIndexable.html) | can we use array-index notation on the data?
[`IsInteger`](IsInteger.html) | can we use the data as an integer number?
[`IsIterable`](IsIterable.html) | can we use the data in a `foreach()` loop?
[`IsLogical`](IsLogical.html) | can we use the data for true / false decisions?
[`IsNull`](IsNull.html) | does the data represent no value?
[`IsNumeric`](IsNumeric.html) | can we use the data as a number of any kind?
[`IsObject`](IsObject.html) | can we use the data as a PHP object?
[`IsObjectOfType`](IsObjectOfType.html) | is the data compatible with a given class or object?
[`IsPcreRegex`](IsPcreRegex.html) | is the data a valid PCRE regular expression?
[`IsResource`](IsResource.html) | is the data a PHP resource handle?
[`IsStringy`](IsStringy.html) | can we use the data as a PHP `string`?

Click on a class name to see full details.

## By Nature

Here's a list of the available checks, grouped by the kind of thing they're checking for.

### Core PHP Types

These checks are compatible with PHP 7.0's strict typing.

Class | Description
------|------------
[`IsArray`](IsArray.html) | can the data be used with PHP's `array_xxx()` functions?
[`IsBoolean`](IsBoolean.html) | can the data be used as a PHP `boolean`?
[`IsCallable`](IsCallable.html) | can the data be used as a PHP function?
[`IsDouble`](IsDouble.html) | can we use the data as a floating point number?
[`IsInteger`](IsInteger.html) | can we use the data as an integer number?
[`IsNull`](IsNull.html) | does the data represent no value?
[`IsObject`](IsObject.html) | can we use the data as a PHP object?
[`IsObjectOfType`](IsObjectOfType.html) | is the data compatible with a given class or object?
[`IsResource`](IsResource.html) | is the data a PHP resource handle?
[`IsStringy`](IsStringy.html) | can we use the data as a PHP `string`?

### Classes And Objects

These are checks on object-oriented programming (OOP) types.

Class | Description
------|------------
[`IsCompatibleWith`](IsCompatibleWith.html) | is the data compatible with a given class or interface?
[`IsDefinedClass`](IsDefinedClass.html) | is the data a valid class name?
[`IsDefinedInterface`](IsDefinedInterface.html) | is the data a valid interface name?
[`IsDefinedObjectType`](IsDefinedObjectType.html) | is the data a valid class or interface name?
[`IsDefinedTrait`](IsDefinedTrait.html) | is the data a valid trait name?
[`IsObject`](IsObject.html) | can we use the data as a PHP object?
[`IsObjectOfType`](IsObjectOfType.html) | is the data compatible with a given class or object?

### Content

These are checks on the contents of the data, not just the data type itself.

Class | Description
------|------------
[`IsEmpty`](IsEmpty.html) | does the data have any useful content at all?
[`IsNumeric`](IsNumeric.html) | can we use the data as a number of any kind?
[`IsPcreRegex`](IsPcreRegex.html) | is the data a valid PCRE regular expression?

### How The Data Can Be Used

These are checks to see if the data can be safely used in common PHP code structures.

Class | Description
------|------------
[`IsAssignable`](IsAssignable.html) | can we use PHP object property notation on the data?
[`IsIndexable`](IsIndexable.html) | can we use array-index notation on the data?
[`IsIterable`](IsIterable.html) | can we use the data in a `foreach()` loop?
[`IsLogical`](IsLogical.html) | can we use the data for true / false decisions?
