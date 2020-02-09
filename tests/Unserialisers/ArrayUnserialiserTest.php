<?php

declare(strict_types=1);

/*
 * This file is part of Cereal.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Cereal\Tests\Unserialisers;

use KodeKeep\Cereal\Unserialisers\ArrayUnserialiser;

/**
 * @covers \KodeKeep\Cereal\Unserialisers\ArrayUnserialiser
 */
class ArrayUnserialiserTest extends TestCase
{
    protected function getInput(): string
    {
        return "array ( 'hello' => 'world', )";
    }

    protected function getUnserialiser(): ArrayUnserialiser
    {
        return new ArrayUnserialiser();
    }
}
