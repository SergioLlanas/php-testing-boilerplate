<?php

namespace Deg540\PHPTestingBoilerplate;

use PHPUnit\Framework\TestCase;

class RomanToDecimalTest extends TestCase
{
    /**
     * @test
     */
    public function hace_bien_casos_base_a_decimal(){
        $RomanToDecimal = new RomanToDecimal();

        //$result = $RomanToDecimal->casos_base("M");

        $this->assertEquals(1, $RomanToDecimal->casos_base("I"));
        $this->assertEquals(4, $RomanToDecimal->casos_base("IV"));
        $this->assertEquals(5, $RomanToDecimal->casos_base("V"));
        $this->assertEquals(9, $RomanToDecimal->casos_base("IX"));
        $this->assertEquals(10, $RomanToDecimal->casos_base("X"));
        $this->assertEquals(40, $RomanToDecimal->casos_base("XL"));
        $this->assertEquals(50, $RomanToDecimal->casos_base("L"));
        $this->assertEquals(90, $RomanToDecimal->casos_base("XC"));
        $this->assertEquals(100, $RomanToDecimal->casos_base("C"));
        $this->assertEquals(500, $RomanToDecimal->casos_base("D"));
        $this->assertEquals(1000, $RomanToDecimal->casos_base("M"));
    }
}
