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

namespace KodeKeep\Cereal\Tests\Utils;

use KodeKeep\Cereal\Exceptions\FileDoesNotExistException;
use KodeKeep\Cereal\Utils\File;
use PHPUnit\Framework\TestCase;

/**
 * @covers \KodeKeep\Cereal\Utils\File
 */
class FileTest extends TestCase
{
    /** @test */
    public function should_get_extension_from_path()
    {
        $this->assertSame('json', File::extension('data.json'));
    }

    /** @test */
    public function should_return_true_when_file_exists()
    {
        $this->assertTrue(File::exists(sprintf('%s/../stubs/data.json', __DIR__)));
    }

    /** @test */
    public function should_return_false_when_files_does_not_exist()
    {
        $this->assertFalse(File::exists('invalid.json'));
    }

    /** @test */
    public function should_throw_exception_when_getting_contents_of_file_that_does_not_exist()
    {
        $this->expectException(FileDoesNotExistException::class);

        File::contents('invalid.json');
    }

    /** @test */
    public function should_get_the_contents_of_a_file()
    {
        $contents = File::contents(sprintf('%s/../stubs/data.json', __DIR__));

        $this->assertSame(json_encode(['hello' => 'world']), $contents);
    }

    /** @test */
    public function should_throw_exception_when_getting_file_that_does_not_exist()
    {
        $this->expectException(FileDoesNotExistException::class);

        File::get('invalid.json');
    }

    /** @test */
    public function should_get_a_file()
    {
        $contents = File::get(sprintf('%s/../stubs/data.php', __DIR__));

        $this->assertSame(['hello' => 'world'], $contents);
    }
}
