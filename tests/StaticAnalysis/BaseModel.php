<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018 Jan Gregor Emge-Triebel
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/Jan0707/phpstan-prophecy
 */

namespace JanGregor\Prophecy\Test\StaticAnalysis;

class BaseModel
{
    /**
     * @var string
     */
    private $foo;

    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     */
    public function setFoo(string $foo): void
    {
        $this->foo = $foo;
    }

    /**
     * @param int $number
     *
     * @return int
     */
    public function doubleTheNumber(int $number)
    {
        return 2 * $number;
    }

    public function bar(Bar $bar): string
    {
        return $bar->bar();
    }

    public function baz(Baz $baz): string
    {
        return $baz->baz();
    }
}
