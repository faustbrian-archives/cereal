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

use KodeKeep\Cereal\Readers\CsvReader;

/**
 * @covers \KodeKeep\Cereal\Readers\CsvReader
 */
class CsvReaderTest extends TestCase
{
    public function should_read_file()
    {
        $reader = $this->getReader();

        $contents = $reader->read(
            sprintf('%s/../stubs/data.'.$this->getFileExtension(), __DIR__)
        );

        $this->assertSame([['hello'], ['world']], $contents);
    }

    protected function getFileExtension(): string
    {
        return 'csv';
    }

    protected function getReader(): CsvReader
    {
        return new CsvReader();
    }
}
