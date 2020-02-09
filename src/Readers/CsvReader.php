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

namespace KodeKeep\Cereal\Readers;

use KodeKeep\Cereal\Unserialisers\CsvUnserialiser;

class CsvReader extends Reader
{
    protected $extensions = ['csv'];

    public function read($path, ?string $class = null): array
    {
        return (new CsvUnserialiser())->unserialise($this->contents($path), $class);
    }
}
