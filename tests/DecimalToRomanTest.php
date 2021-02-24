<?php


namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\DecimalToRoman;
use PHPUnit\Framework\TestCase;

class DecimalToRomanTest extends TestCase
{
   /**
    * @test
    */
    public function elige_bien_el_metodo()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->elige(8);

        $this->assertEquals("VIII", $result);
    }

    /**
     * @test
     */
    public function separa_numero_al_reves_bien()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->separa_numero(5236);

        $this->assertEquals([6,3,2,5], $result);
    }

    /**
     * @test
     */
    public function metodo2_bien()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->metodo2(14);

        $this->assertEquals("XIV", $result);
    }

}