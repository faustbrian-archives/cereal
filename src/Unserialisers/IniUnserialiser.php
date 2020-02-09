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

namespace KodeKeep\Cereal\Unserialisers;

use KodeKeep\Cereal\Contracts\Unserialiser;
use KodeKeep\Cereal\Utils\Mapper;

class IniUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        $contents = json_decode(json_encode(parse_ini_string($input, true)));

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return (array) $contents;
    }
}
