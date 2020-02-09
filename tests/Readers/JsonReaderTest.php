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

use KodeKeep\Cereal\Readers\JsonReader;

/**
 * @covers \KodeKeep\Cereal\Readers\JsonReader
 */
class JsonReaderTest extends TestCase
{
    protected function getFileExtension(): string
    {
        return 'json';
    }

    protected function getReader(): JsonReader
    {
        return new JsonReader();
    }
}
