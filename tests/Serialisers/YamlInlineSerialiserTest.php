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

use KodeKeep\Cereal\Serialisers\YamlInlineSerialiser;

/**
 * @covers \KodeKeep\Cereal\Serialisers\YamlInlineSerialiser
 */
class YamlInlineSerialiserTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return "hello: world\n";
    }

    protected function getSerialiser(): YamlInlineSerialiser
    {
        return new YamlInlineSerialiser();
    }
}
