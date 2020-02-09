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

use KodeKeep\Cereal\Unserialisers\YamlUnserialiser;

/**
 * @covers \KodeKeep\Cereal\Unserialisers\YamlUnserialiser
 */
class YamlUnserialiserTest extends TestCase
{
    protected function getInput(): string
    {
        return 'hello: world';
    }

    protected function getUnserialiser(): YamlUnserialiser
    {
        return new YamlUnserialiser();
    }
}
