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

namespace KodeKeep\Cereal\Tests\Readers;

use KodeKeep\Cereal\Exceptions\InvalidFileTypeException;
use KodeKeep\Cereal\Readers\Reader;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /** @test */
    public function should_return_reader()
    {
        $reader = $this->getReader();

        $this->assertInstanceOf(Reader::class, $reader);
    }

    /** @test */
    public function should_read_file()
    {
        $reader = $this->getReader();

        $contents = $reader->read(
            sprintf('%s/../stubs/data.'.$this->getFileExtension(), __DIR__)
        );

        $this->assertSame(['hello' => 'world'], $contents);
    }

    /** @test */
    public function should_throw_exception_when_invalid_file_type()
    {
        $this->expectException(InvalidFileTypeException::class);

        $reader = $this->getReader();

        $reader->read('invalid.txt');
    }

    abstract protected function getReader();

    abstract protected function getFileExtension();
}
