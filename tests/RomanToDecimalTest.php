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

        //$result = $RomanToDecimal->elige("M");

        $this->assertEquals(1, $RomanToDecimal->elige("I"));
        $this->assertEquals(4, $RomanToDecimal->elige("IV"));
        $this->assertEquals(5, $RomanToDecimal->elige("V"));
        $this->assertEquals(9, $RomanToDecimal->elige("IX"));
        $this->assertEquals(10, $RomanToDecimal->elige("X"));
        $this->assertEquals(40, $RomanToDecimal->elige("XL"));
        $this->assertEquals(50, $RomanToDecimal->elige("L"));
        $this->assertEquals(90, $RomanToDecimal->elige("XC"));
        $this->assertEquals(100, $RomanToDecimal->elige("C"));
        $this->assertEquals(500, $RomanToDecimal->elige("D"));
        $this->assertEquals(1000, $RomanToDecimal->elige("M"));
        $this->assertEquals(86, $RomanToDecimal->elige("LXXXVI"));
        $this->assertEquals(150, $RomanToDecimal->elige("CL"));
    }


    /**
     * @test
     */
    public function hace_bien_los_de_tipo_suma(){
        $RomanToDecimal = new RomanToDecimal();

        //$result = $RomanToDecimal->casos_base("M");

        $this->assertEquals(20, $RomanToDecimal->tipoSumar("XX"));
    }

    /**
     * @test
     */
    public function hace_bien_los_de_tipo_resta(){
        $RomanToDecimal = new RomanToDecimal();

        //$result = $RomanToDecimal->casos_base("M");

        $this->assertEquals(44, $RomanToDecimal->tipoRestar("XLIV"));
    }

}
