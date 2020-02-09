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

namespace KodeKeep\Cereal\Writers;

use KodeKeep\Cereal\Serialisers\YamlInlineSerialiser;

class YamlInlineWriter extends Writer
{
    public function write($path, $input): bool
    {
        return $this->put($path, (new YamlInlineSerialiser())->serialise($input));
    }
}
