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

namespace KodeKeep\Cereal\Contracts;

use KodeKeep\Cereal\Readers\Reader;
use KodeKeep\Cereal\Writers\Writer;

interface Normaliser
{
    public function serialiser(): Serialiser;

    public function unserialiser(): Unserialiser;

    public function writer(): Writer;

    public function reader(): Reader;
}
