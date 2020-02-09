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

use KodeKeep\Cereal\Normalisers\IniNormaliser;

/**
 * @covers \KodeKeep\Cereal\Normalisers\IniNormaliser
 */
class IniNormaliserTest extends TestCase
{
    protected function getNormaliser(): IniNormaliser
    {
        return new IniNormaliser();
    }
}
