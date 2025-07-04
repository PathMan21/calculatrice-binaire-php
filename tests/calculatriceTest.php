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

    public function testSoustraction()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(-1, $calculatrice->calculer(2, 3, '-'));
    }

    public function testMultiplication()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(6, $calculatrice->calculer(2, 3, '*'));
    }

    public function testDivision()
    {
        $calculatrice = new Calculatrice();
        $this->assertEquals(2, $calculatrice->calculer(6, 3, '/'));
    }

}
