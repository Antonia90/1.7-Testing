<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

require_once 'gradeChecker.php';

class GradeCheckerTests extends TestCase
{

    #[DataProvider('provideInvalidCases')]

    public function testInvalidNote(int|float $note, string $expected): void
    {

        $this->assertSame($expected, gradeChecker($note));
    }
    public static function provideInvalidCases(): array
    {
        return [
            'mayor a 10' => [11, 'Nota inválida'],
            'muy grande' => [100, 'Nota inválida'],
            'negativo simple' => [-1, 'Nota inválida'],
            'muy negativo' => [-100, 'Nota inválida'],
        ];
    }

    #[DataProvider('provideValidCases')]
    public function testValidNotes(int|float $note, string $expected): void
    {
        $this->assertSame($expected, gradeChecker($note));
    }

    public static function provideValidCases(): array
    {
        return [

            'primera 10' => [10, 'Primera División'],
            'primera 6' => [6, 'Primera División'],
            'primera 9' => [9, 'Primera División'],
            'primera 7.5' => [7.5, 'Primera División'],

            'segunda 5.9' => [5.9, 'Segunda División'],
            'segunda 4.5' => [4.5, 'Segunda División'],

            'tercera 4.4' => [4.4, 'Tercera División'],
            'tercera 3.3' => [3.3, 'Tercera División'],

            'repite 3.2' => [3.2, 'Debe repetir la cursada'],
            'repite 0' => [0, 'Debe repetir la cursada'],
        ];
    }
}
