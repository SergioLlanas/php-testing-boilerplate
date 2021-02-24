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

        $result = $DecimalToRoman->elige(800);

        $this->assertEquals("DCCC", $result);
    }




}