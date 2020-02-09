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

namespace KodeKeep\Cereal\Tests\Serialisers;

use KodeKeep\Cereal\Serialisers\IniSerialiser;

/**
 * @covers \KodeKeep\Cereal\Serialisers\IniSerialiser
 */
class IniSerialiserTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello = world';
    }

    protected function getSerialiser(): IniSerialiser
    {
        return new IniSerialiser();
    }
}
