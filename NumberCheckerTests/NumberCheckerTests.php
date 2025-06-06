<?php

use PHPUnit\Framework\TestCase;

require_once 'NumberChecker.php';

class NumberCheckerTests extends TestCase
{
    private $numberChecker;
    protected function setUp(): void
    {
        $this->numberChecker = new NumberChecker(2);
    }

    public function testEvenWithEvenNumber(): void
    {
        $this->assertTrue($this->numberChecker->isEven());
    }
    public function testIsPositiveWithPositiveNumber(): void
    {
        $this->assertTrue($this->numberChecker->isPositive());
    }

    public function testIsEvenWithOddNumber(): void
    {
        $this->numberChecker = new NumberChecker(3);
        $this->assertFalse($this->numberChecker->isEven());
    }
    public function testIsPositiveWithNegativeNumber(): void
    {
        $this->numberChecker = new NumberChecker((-1));
        $this->assertFalse($this->numberChecker->isPositive());
    }
    public function testIsEvenWithZero(): void
    {
        $this->numberChecker = new NumberChecker(0);
        $this->assertTrue($this->numberChecker->isEven());
    }
    public function testIsPositiveWithZero(): void
    {
        $this->numberChecker = new NumberChecker(0);
        $this->assertFalse($this->numberChecker->isPositive());
    }
}
