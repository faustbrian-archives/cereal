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

use KodeKeep\Cereal\Contracts\Serialiser;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @test */
    public function should_return_serialiser()
    {
        $serialiser = $this->getSerialiser();

        $this->assertInstanceOf(Serialiser::class, $serialiser);
    }

    /** @test */
    public function should_serialise_input()
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertSame($this->getExpectedOutput(), $contents);
    }

    abstract protected function getSerialiser();

    abstract protected function getExpectedOutput();
}
