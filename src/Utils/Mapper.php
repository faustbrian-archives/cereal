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

namespace KodeKeep\Cereal\Utils;

class Mapper
{
    public function map($input, $class)
    {
        if (is_array($input)) {
            $input = $this->arrayToObject($input);
        }

        return (new \JsonMapper())->map($input, new $class());
    }

    private function arrayToObject($input)
    {
        return json_decode(json_encode($input));
    }
}
