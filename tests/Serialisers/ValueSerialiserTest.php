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

use KodeKeep\Cereal\Serialisers\ValueSerialiser;

/**
 * @covers \KodeKeep\Cereal\Serialisers\ValueSerialiser
 */
class ValueSerialiserTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return 'a:1:{s:5:"hello";s:5:"world";}';
    }

    protected function getSerialiser(): ValueSerialiser
    {
        return new ValueSerialiser();
    }
}
