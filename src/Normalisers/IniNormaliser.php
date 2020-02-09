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

namespace KodeKeep\Cereal\Normalisers;

use KodeKeep\Cereal\Contracts\Normaliser;
use KodeKeep\Cereal\Contracts\Serialiser;
use KodeKeep\Cereal\Contracts\Unserialiser;
use KodeKeep\Cereal\Readers\IniReader;
use KodeKeep\Cereal\Readers\Reader;
use KodeKeep\Cereal\Serialisers\IniSerialiser;
use KodeKeep\Cereal\Unserialisers\IniUnserialiser;
use KodeKeep\Cereal\Writers\IniWriter;
use KodeKeep\Cereal\Writers\Writer;

class IniNormaliser implements Normaliser
{
    protected $serialiser;

    protected $unserialiser;

    protected $writer;

    protected $reader;

    public function serialiser(): Serialiser
    {
        if ($this->serialiser) {
            return $this->serialiser;
        }

        return $this->serialiser = new IniSerialiser();
    }

    public function unserialiser(): Unserialiser
    {
        if ($this->unserialiser) {
            return $this->unserialiser;
        }

        return $this->unserialiser = new IniUnserialiser();
    }

    public function writer(): Writer
    {
        if ($this->writer) {
            return $this->writer;
        }

        return $this->writer = new IniWriter();
    }

    public function reader(): Reader
    {
        if ($this->reader) {
            return $this->reader;
        }

        return $this->reader = new IniReader();
    }
}
