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

namespace KodeKeep\Cereal\Tests\Writers;

use KodeKeep\Cereal\Writers\XmlWriter;

/**
 * @covers \KodeKeep\Cereal\Writers\XmlWriter
 */
class XmlWriterTest extends TestCase
{
    protected function getExpectedOutput(): string
    {
        return 'hello: world';
    }

    protected function getWriter(): XmlWriter
    {
        return new XmlWriter();
    }
}
