<?php declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use Src\Calculation;

final class CalculationTest extends TestCase
{
    public function testSomar(): void
    {
        $calculation = new Calculation();
        $result = $calculation->somar(3.0, 3.0);
        $this->assertEquals(6.0, $result);
    }
}