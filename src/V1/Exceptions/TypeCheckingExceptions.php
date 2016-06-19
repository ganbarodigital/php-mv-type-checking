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

namespace GanbaroDigital\TypeChecking\V1\Exceptions;

use GanbaroDigital\DIContainers\V1\FactoryList\Containers\FactoryListContainer;
use GanbaroDigital\TypeChecking\V1\Exceptions\DataCannotBeEmpty;
use GanbaroDigital\TypeChecking\V1\Exceptions\DataMustBeEmpty;
use GanbaroDigital\TypeChecking\V1\Exceptions\InvalidPcreRegex;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClass;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchClassOrInterface;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchInterface;
use GanbaroDigital\TypeChecking\V1\Exceptions\NoSuchTrait;
use GanbaroDigital\TypeChecking\V1\Exceptions\UnsupportedType;
use GanbaroDigital\TypeChecking\V1\Exceptions\UnsupportedValue;

class TypeCheckingExceptions extends FactoryListContainer
{
    public function __construct()
    {
        parent::__construct([
            "DataCannotBeEmpty::newFromInputParameter" => [ DataCannotBeEmpty::class, 'newFromInputParameter' ],
            "DataCannotBeEmpty::newFromVar" => [ DataCannotBeEmpty::class, 'newFromVar' ],
            "DataMustBeEmpty::newFromInputParameter" => [ DataMustBeEmpty::class, 'newFromInputParameter' ],
            "DataMustBeEmpty::newFromVar" => [ DataMustBeEmpty::class, 'newFromVar' ],
            "InvalidPcreRegex::newFromInputParameter" => [ InvalidPcreRegex::class, 'newFromInputParameter' ],
            "InvalidPcreRegex::newFromVar" => [ InvalidPcreRegex::class, 'newFromVar' ],
            "NoSuchClass::newFromInputParameter" => [ NoSuchClass::class, 'newFromInputParameter' ],
            "NoSuchClass::newFromVar" => [ NoSuchClass::class, 'newFromVar' ],
            "NoSuchClassOrInterface::newFromInputParameter" => [ NoSuchClassOrInterface::class, 'newFromInputParameter' ],
            "NoSuchClassOrInterface::newFromVar" => [ NoSuchClassOrInterface::class, 'newFromVar' ],
            "NoSuchInterface::newFromInputParameter" => [ NoSuchInterface::class, 'newFromInputParameter' ],
            "NoSuchInterface::newFromVar" => [ NoSuchInterface::class, 'newFromVar' ],
            "NoSuchTrait::newFromInputParameter" => [ NoSuchTrait::class, 'newFromInputParameter' ],
            "NoSuchTrait::newFromVar" => [ NoSuchTrait::class, 'newFromVar' ],
            "UnsupportedType::newFromInputParameter" => [ UnsupportedType::class, 'newFromInputParameter' ],
            "UnsupportedType::newFromVar" => [ UnsupportedType::class, 'newFromVar' ],
            "UnsupportedValue::newFromInputParameter" => [ UnsupportedValue::class, 'newFromInputParameter' ],
            "UnsupportedValue::newFromVar" => [ UnsupportedValue::class, 'newFromVar' ],
        ]);
    }
}
