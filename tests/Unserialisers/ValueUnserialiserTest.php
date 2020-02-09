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

use KodeKeep\Cereal\Unserialisers\ValueUnserialiser;

/**
 * @covers \KodeKeep\Cereal\Unserialisers\ValueUnserialiser
 */
class ValueUnserialiserTest extends TestCase
{
    protected function getInput(): string
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getUnserialiser(): ValueUnserialiser
    {
        return new ValueUnserialiser();
    }
}
