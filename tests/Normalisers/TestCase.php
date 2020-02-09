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

namespace KodeKeep\Cereal\Tests\Normalisers;

use KodeKeep\Cereal\Contracts\Serialiser;
use KodeKeep\Cereal\Contracts\Unserialiser;
use KodeKeep\Cereal\Readers\Reader;
use KodeKeep\Cereal\Writers\Writer;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @test */
    public function should_return_serialiser()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Serialiser::class, $normaliser->serialiser());
    }

    /** @test */
    public function should_return_unserialiser()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Unserialiser::class, $normaliser->unserialiser());
    }

    /** @test */
    public function should_return_reader()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Reader::class, $normaliser->reader());
    }

    /** @test */
    public function should_return_writer()
    {
        $normaliser = $this->getNormaliser();

        $this->assertInstanceOf(Writer::class, $normaliser->writer());
    }

    abstract protected function getNormaliser();
}
