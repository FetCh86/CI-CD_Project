<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 24/06/2019
 * Time: 14:30
 */

declare(strict_types=1);

namespace App\Service;


class Calculator
{
    public function add(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber + 5;
    }
}