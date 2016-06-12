---
currentSection: overview
currentItem: home
pageflow_next_url: license.html
pageflow_next_text: License
---

# Introduction

## What Is The Type-Checking Library?

Ganbaro Digital's _Type-Checking Library_ provides an easy-to-use collection of helpers to check and enforce variable types. These helpers complement PHP 7's type declaration system, and can be used with PHP 5.5 or later too.

## Goals

The _Type-Checking Library_'s purpose is to collect tools for checking the type of a variable.

## Design Constraints

The library's design is guided by the following constraint(s):

* _Fundamental dependency of other libraries_: This library provides robustness tests for other libraries to use in production. Composer does not support multual dependencies (two or more packages depending on each other). As a result, this library needs to depend on very little (if anything at all).

## Questions?

This package was created by [Stuart Herbert](http://www.stuartherbert.com) for [Ganbaro Digital Ltd](http://ganbarodigital.com). Follow [@ganbarodigital](https://twitter.com/ganbarodigital) or [@stuherbert](https://twitter.com/stuherbert) for updates.
