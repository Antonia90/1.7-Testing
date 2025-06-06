<?php

use PHPUnit\Framework\TestCase;

require_once 'gradeChecker.php';

class GradeCheckerTests extends TestCase
{


    public function testInvalidNoteWithNoteOutOfRange(): void
    {
        $this->assertSame('Nota inválida', gradeChecker(11));
        $this->assertSame('Nota inválida', gradeChecker(100));
        $this->assertSame('Nota inválida', gradeChecker(-1));
        $this->assertSame('Nota inválida', gradeChecker(-100));
    }

    public function testFirstDivision(): void
    {
        $this->assertSame('Primera División', gradeChecker(10));
        $this->assertSame('Primera División', gradeChecker(6));
    }
    public function testSecondDivision(): void
    {
        $this->assertSame('Segunda División', gradeChecker(5.9));
        $this->assertSame('Segunda División', gradeChecker(4.5));
    }
    public function testThirdDivision(): void
    {
        $this->assertSame('Tercera División', gradeChecker(4.4));
        $this->assertSame('Tercera División', gradeChecker(3.3));
    }

    public function testRepeatCourse(): void
    {
        $this->assertSame('Debe repetir la cursada', gradeChecker(3.2));
        $this->assertSame('Debe repetir la cursada', gradeChecker(0));
    }
}
