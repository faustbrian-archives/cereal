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
use KodeKeep\Csv\Reader;

class CsvUnserialiser implements Unserialiser
{
    public function unserialise($input, ?string $class = null): array
    {
        $reader = Reader::createFromString($input);

        $contents = $reader->fetchAll();

        // @deprecated for the moment
        // for ($i = 0; $i < count($contents); ++$i) {
        //     if ($i <= 0) {
        //         continue;
        //     }

        //     $contents[$i] = array_combine($contents[0], $contents[$i]);
        // }

        if (! is_null($class)) {
            return (new Mapper())->map($contents, $class);
        }

        return $contents;
    }
}
