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

use KodeKeep\Cereal\Readers\YamlReader;

/**
 * @covers \KodeKeep\Cereal\Readers\YamlReader
 */
class YamlReaderTest extends TestCase
{
    protected function getFileExtension(): string
    {
        return 'yml';
    }

    protected function getReader(): YamlReader
    {
        return new YamlReader();
    }
}
