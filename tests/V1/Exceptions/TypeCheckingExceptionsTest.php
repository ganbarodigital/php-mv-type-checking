<?php

/**
 * Copyright (c) 2015-present Ganbaro Digital Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the names of the copyright holders nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Libraries
 * @package   TypeChecking/V1/Exceptions
 * @author    Stuart Herbert <stuherbert@ganbarodigital.com>
 * @copyright 2015-present Ganbaro Digital Ltd www.ganbarodigital.com
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://ganbarodigital.github.io/php-mv-type-checking
 */

namespace GanbaroDigitalTest\TypeChecking\V1\Exceptions;

use GanbaroDigital\DIContainers\V1\Interfaces\FactoryList;
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;
use GanbaroDigital\TypeChecking\V1\Exceptions\InvalidPcreRegex;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClass;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchInterface;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchTrait;
use GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingExceptions;
use GanbaroDigital\TypeChecking\V1\Exceptions\UnsupportedType;
use GanbaroDigital\TypeChecking\V1\Exceptions\UnsupportedValue;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingExceptions
 */
class TypeCheckingExceptionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     */
    public function testCanInstantiate()
    {
        // ----------------------------------------------------------------
        // setup your test

        // ----------------------------------------------------------------
        // perform the change

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(TypeCheckingExceptions::class, $unit);
    }

    /**
     * @covers ::__construct
     */
    public function test_is_FactoryList()
    {
        // ----------------------------------------------------------------
        // setup your test

        // ----------------------------------------------------------------
        // perform the change

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(FactoryList::class, $unit);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_DataCannotBeEmpty_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['DataCannotBeEmpty::newFromInputParameter'];
        $exception = $factory(null, '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(DataCannotBeEmpty::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_DataCannotBeEmpty_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['DataCannotBeEmpty::newFromVar'];
        $exception = $factory(null, '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(DataCannotBeEmpty::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_DataMustBeEmpty_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['DataMustBeEmpty::newFromInputParameter'];
        $exception = $factory("hello, world!", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(DataMustBeEmpty::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_DataMustBeEmpty_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['DataMustBeEmpty::newFromVar'];
        $exception = $factory("hello, world!", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(DataMustBeEmpty::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_InvalidPcreRegex_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['InvalidPcreRegex::newFromInputParameter'];
        $exception = $factory("/hello", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(InvalidPcreRegex::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_InvalidPcreRegex_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['InvalidPcreRegex::newFromVar'];
        $exception = $factory("/hello", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(InvalidPcreRegex::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchClass_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchClass::newFromInputParameter'];
        $exception = $factory("UndefinedClass", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchClass::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchClass_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchClass::newFromVar'];
        $exception = $factory("UndefinedClass", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchClass::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchClassOrInterface_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchClassOrInterface::newFromInputParameter'];
        $exception = $factory(null, '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchClassOrInterface::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchClassOrInterface_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchClassOrInterface::newFromVar'];
        $exception = $factory("UndefinedClass", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchClassOrInterface::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchInterface_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchInterface::newFromInputParameter'];
        $exception = $factory("UndefinedInterface", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchInterface::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchInterface_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchInterface::newFromVar'];
        $exception = $factory("UndefinedInterface", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchInterface::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchTrait_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchTrait::newFromInputParameter'];
        $exception = $factory("UndefinedTrait", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchTrait::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_NoSuchTrait_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['NoSuchTrait::newFromVar'];
        $exception = $factory("UndefinedTrait", '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchTrait::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_UnsupportedType_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['UnsupportedType::newFromInputParameter'];
        $exception = $factory(null, '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(UnsupportedType::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_UnsupportedType_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['UnsupportedType::newFromVar'];
        $exception = $factory(null, '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(UnsupportedType::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_UnsupportedValue_newFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['UnsupportedValue::newFromInputParameter'];
        $exception = $factory(null, '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(UnsupportedValue::class, $exception);
    }

    /**
     * @covers ::offsetGet
     */
    public function test_has_factory_for_UnsupportedValue_newFromVar()
    {
        // ----------------------------------------------------------------
        // setup your test

        $unit = new TypeCheckingExceptions;

        // ----------------------------------------------------------------
        // perform the change

        $factory = $unit['UnsupportedValue::newFromVar'];
        $exception = $factory(null, '$data');

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(UnsupportedValue::class, $exception);
    }
}
