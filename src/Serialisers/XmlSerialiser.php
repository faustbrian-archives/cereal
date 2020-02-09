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

namespace KodeKeep\Cereal\Serialisers;

use KodeKeep\Cereal\Contracts\Serialiser;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerialiser;

class XmlSerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return (new SymfonySerialiser(
            [new ObjectNormalizer()], [new XmlEncoder()]
        ))->serialize($input, 'xml');
    }
}
