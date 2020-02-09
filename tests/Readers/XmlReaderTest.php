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

use KodeKeep\Cereal\Readers\XmlReader;

/**
 * @covers \KodeKeep\Cereal\Readers\XmlReader
 */
class XmlReaderTest extends TestCase
{
    protected function getFileExtension(): string
    {
        return 'xml';
    }

    protected function getReader(): XmlReader
    {
        return new XmlReader();
    }
}
