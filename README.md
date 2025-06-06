# 🧪 PHP Unit Testing: Nivel 1

Este repositorio contiene dos ejercicios que abordan el testing en PHP con PHPUnit, incluyendo prácticas de **desarrollo guiado por tests (TDD)**.

---
Ejercicio 1 - NumberChecker
Descripción
Se testea la clase NumberChecker, que permite verificar si un número:

Es par (isEven())
Es positivo (isPositive())

---
Ejercicio 2 - GradeChecker (TDD)
Descripción
Este ejercicio replica el enfoque TDD: primero se escriben los tests, luego se implementa el código para que pasen. La función gradeChecker(float|int $nota) devuelve la calificación correspondiente.

## 📦 Requisitos

- PHP >= 8.1
- [Composer](https://getcomposer.org/)
- PHPUnit (instalado mediante Composer)

---

## 🛠️ Instalación

1. Clona este repositorio desde la terminal:
git clone <https://github.com/Antonia90/1.7-Testing.git>
cd tema7_debug_test
2. Instala PHPUnit con Composer:
composer require --dev phpunit/phpunit:^10.5
3. Verifica que PHPUnit esté disponible:
vendor/bin/phpunit --version
4. Cómo ejecutar los tests:
vendor/bin/phpunit NumberCheckerTests.php
vendor/bin/phpunit GradeCheckerTests.php
