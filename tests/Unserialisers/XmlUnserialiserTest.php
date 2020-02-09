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

use KodeKeep\Cereal\Unserialisers\XmlUnserialiser;

/**
 * @covers \KodeKeep\Cereal\Unserialisers\XmlUnserialiser
 */
class XmlUnserialiserTest extends TestCase
{
    protected function getInput(): string
    {
        return '<?xml version="1.0"?><response><hello>world</hello></response>';
    }

    protected function getUnserialiser(): XmlUnserialiser
    {
        return new XmlUnserialiser();
    }
}
