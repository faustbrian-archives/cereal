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

use KodeKeep\Cereal\Serialisers\XmlSerialiser;

/**
 * @covers \KodeKeep\Cereal\Serialisers\XmlSerialiser
 */
class XmlSerialiserTest extends TestCase
{
    public function should_serialise_input()
    {
        $serialiser = $this->getSerialiser();

        $contents = $serialiser->serialise(['hello' => 'world']);

        $this->assertXmlStringEqualsXmlString($this->getExpectedOutput(), $contents);
    }

    protected function getExpectedOutput(): string
    {
        return '<?xml version="1.0"?><response><hello>world</hello></response>';
    }

    protected function getSerialiser(): XmlSerialiser
    {
        return new XmlSerialiser();
    }
}
