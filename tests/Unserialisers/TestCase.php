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

use KodeKeep\Cereal\Contracts\Unserialiser;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @test */
    public function should_return_unserialiser()
    {
        $unserialiser = $this->getUnserialiser();

        $this->assertInstanceOf(Unserialiser::class, $unserialiser);
    }

    /** @test */
    public function should_unserialise_input()
    {
        $unserialiser = $this->getUnserialiser();

        $contents = $unserialiser->unserialise($this->getInput());

        $this->assertSame(['hello' => 'world'], $contents);
    }

    abstract protected function getUnserialiser();

    abstract protected function getInput();
}
