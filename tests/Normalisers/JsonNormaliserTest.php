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

namespace KodeKeep\Cereal\Tests\Normalisers;

use KodeKeep\Cereal\Normalisers\JsonNormaliser;

/**
 * @covers \KodeKeep\Cereal\Normalisers\JsonNormaliser
 */
class JsonNormaliserTest extends TestCase
{
    protected function getNormaliser(): JsonNormaliser
    {
        return new JsonNormaliser();
    }
}
