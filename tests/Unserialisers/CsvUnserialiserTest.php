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

use KodeKeep\Cereal\Unserialisers\CsvUnserialiser;

/**
 * @covers \KodeKeep\Cereal\Unserialisers\CsvUnserialiser
 */
class CsvUnserialiserTest extends TestCase
{
    public function should_unserialise_input()
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertSame([['hello'], ['world']], $contents);
    }

    protected function getInput(): string
    {
        return 'hello
world
';
    }

    protected function getUnserialiser(): CsvUnserialiser
    {
        return new CsvUnserialiser();
    }
}
