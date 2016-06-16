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

namespace GanbaroDigitalTest\Reflection\V1\Exceptions;

use GanbaroDigital\ExceptionHelpers\V1\Callers\Values\CodeCaller;
use GanbaroDigital\HttpStatus\Interfaces\HttpException;
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\UnexpectedErrorStatus;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;
use GanbaroDigital\TypeChecking\V1\Exceptions\TypeCheckingException;
use PHPUnit_Framework_TestCase;
use RuntimeException;

/**
 * @coversDefaultClass GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface
 */
class NoSuchClassOrInterfaceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     */
    public function testCanInstantiate()
    {
        // ----------------------------------------------------------------
        // setup your test

        $class = "Invoked";

        // ----------------------------------------------------------------
        // perform the change

        $unit = new NoSuchClassOrInterface($class);

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(NoSuchClassOrInterface::class, $unit);
    }

    /**
     * @covers ::__construct
     */
    public function test_is_TypeCheckingException()
    {
        // ----------------------------------------------------------------
        // setup your test

        $class = "Invoked";

        // ----------------------------------------------------------------
        // perform the change

        $unit = new NoSuchClassOrInterface($class);

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(TypeCheckingException::class, $unit);
    }

    /**
     * @covers ::__construct
     */
    public function test_is_RuntimeException()
    {
        // ----------------------------------------------------------------
        // setup your test

        $class = "Invoked";

        // ----------------------------------------------------------------
        // perform the change

        $unit = new NoSuchClassOrInterface($class);

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(RuntimeException::class, $unit);
    }

    /**
     * @covers ::__construct
     */
    public function test_is_HttpException()
    {
        // ----------------------------------------------------------------
        // setup your test

        $class = "Invoked";

        // ----------------------------------------------------------------
        // perform the change

        $unit = new NoSuchClassOrInterface($class);

        // ----------------------------------------------------------------
        // test the results

        $this->assertInstanceOf(HttpException::class, $unit);
    }

    /**
     * @covers ::__construct
     */
    public function test_maps_onto_HTTP_500()
    {
        // ----------------------------------------------------------------
        // setup your test

        $class = "Invoked";

        // ----------------------------------------------------------------
        // perform the change

        $unit = new NoSuchClassOrInterface($class);

        // ----------------------------------------------------------------
        // test the results

        $httpStatus = $unit->getHttpStatus();
        $this->assertInstanceOf(UnexpectedErrorStatus::class, $httpStatus);
    }

    /**
     * @covers ::newFromInputParameter
     */
    public function testCanCreateFromInputParameter()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedMessage = 'ReflectionMethod->invokeArgs(): GanbaroDigitalTest\Reflection\V1\Exceptions\NoSuchClassOrInterfaceTest->testCanCreateFromInputParameter()@186 says undefined class or interface \'Invoked\'';
        $expectedData = [
            'thrownBy' => new CodeCaller(self::class, __FUNCTION__, '->', __FILE__, 186),
            'thrownByName' => 'GanbaroDigitalTest\Reflection\V1\Exceptions\NoSuchClassOrInterfaceTest->testCanCreateFromInputParameter()@186',
            'calledBy' => new CodeCaller('ReflectionMethod', 'invokeArgs', '->', null, null),
            'calledByName' => 'ReflectionMethod->invokeArgs()',
            'className' => 'Invoked',
            'fieldOrVarName' => '$className',
        ];

        // ----------------------------------------------------------------
        // perform the change

        $unit = NoSuchClassOrInterface::newFromInputParameter('Invoked');

        // ----------------------------------------------------------------
        // test the results

        $actualMessage = $unit->getMessage();
        $actualData = $unit->getMessageData();

        $this->assertEquals($expectedMessage, $actualMessage);
        $this->assertEquals($expectedData, $actualData);
    }

    /**
     * @covers ::newFromVar
     */
    public function testCanCreateFromVariable()
    {
        // ----------------------------------------------------------------
        // setup your test

        $expectedMessage = 'GanbaroDigitalTest\Reflection\V1\Exceptions\NoSuchClassOrInterfaceTest->testCanCreateFromVariable()@217: undefined class or interface \'Invoked\'';
        $expectedData = [
            'thrownBy' => new CodeCaller(self::class, __FUNCTION__, '->', __FILE__, 217),
            'thrownByName' => 'GanbaroDigitalTest\Reflection\V1\Exceptions\NoSuchClassOrInterfaceTest->testCanCreateFromVariable()@217',
            'className' => 'Invoked',
            'fieldOrVarName' => '$className',
        ];

        // ----------------------------------------------------------------
        // perform the change

        $unit = NoSuchClassOrInterface::newFromVar('Invoked');

        // ----------------------------------------------------------------
        // test the results

        $actualMessage = $unit->getMessage();
        $actualData = $unit->getMessageData();

        $this->assertEquals($expectedMessage, $actualMessage);
        $this->assertEquals($expectedData, $actualData);
    }
}
