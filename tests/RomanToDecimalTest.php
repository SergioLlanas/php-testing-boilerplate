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

        $this->assertEquals(149, $RomanToDecimal->tipoRestar("CXLIX"));
    }

    /**
     * @test
     */
    public function elige_bien_el_tipo_y_calcula_decimal(){
        $RomanToDecimal = new RomanToDecimal();

        //$result = $RomanToDecimal->casos_base("M");

        $this->assertEquals(149, $RomanToDecimal->elige("CXLIX"));
        $this->assertEquals(49, $RomanToDecimal->elige("XLIX"));
        $this->assertEquals(87, $RomanToDecimal->elige("LXXXVII"));
        $this->assertEquals(90, $RomanToDecimal->elige("XC"));
    }

}
