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

class ArraySerialiser implements Serialiser
{
    public function serialise($input): string
    {
        return var_export($input, true);
    }
}
