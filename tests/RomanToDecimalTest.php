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
    /**
     * @test
     */
    public function test_final(){
        $RomanToDecimal = new RomanToDecimal();

        $result = $RomanToDecimal->se_ven_todos();

        $this->assertEquals([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150], $result);
    }

}
