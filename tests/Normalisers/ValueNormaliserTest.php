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

use KodeKeep\Cereal\Normalisers\ValueNormaliser;

/**
 * @covers \KodeKeep\Cereal\Normalisers\ValueNormaliser
 */
class ValueNormaliserTest extends TestCase
{
    protected function getNormaliser(): ValueNormaliser
    {
        return new ValueNormaliser();
    }
}
