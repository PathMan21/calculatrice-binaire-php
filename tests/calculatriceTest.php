<?php

use PHPUnit\Framework\TestCase;
use App\Calculatrice;

class CalculatriceTest extends TestCase
{
    public function testAddition()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(5, $calculatrice->calculer(2, 3, '+'));
    }
}
