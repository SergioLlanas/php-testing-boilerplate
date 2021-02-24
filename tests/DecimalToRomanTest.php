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
    public function separa_numero_bien()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->separa_numero(5236);

        $this->assertEquals([5,2,3,6], $result);
    }
}