<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once 'NumberChecker.php';

class NumberCheckerTests extends TestCase
{

    private $numberChecker;

    #[DataProvider('provideIsEvenCases')]
    public function testIsEven(int $number, bool $expected): void
    {
        $this->numberChecker = new NumberChecker($number);
        $this->assertSame($expected, $this->numberChecker->isEven());
    }

    public static function provideIsEvenCases(): array
    {
        return [
            'even number' => [2, true],
            'odd number' => [3, false],
            'zero' => [0, true],
            'negative even' => [-4, true],
            'negative odd' => [-5, false],
        ];
    }

    #[DataProvider('provideIsPositiveCases')]
    public function testIsPositive(int $number, bool $expected): void
    {
        $this->numberChecker = new NumberChecker($number);
        $this->assertSame($expected, $this->numberChecker->isPositive());
    }

    public static function provideIsPositiveCases(): array
    {
        return [
            'positive number' => [7, true],
            'negative number' => [-3, false],
            'zero' => [0, false],
            'large positive' => [100, true],
            'large negative' => [-100, false],
        ];
    }
}
