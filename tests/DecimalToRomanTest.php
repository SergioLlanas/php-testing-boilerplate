<?php


namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\DecimalToRoman;
use PHPUnit\Framework\TestCase;

class DecimalToRomanTest extends TestCase
{
    /**
     * @test
     */
    public function si_es_1_devuelve_I()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(1);

        $this->assertEquals("I", $result);
    }

    /**
     * @test
     */
    public function si_es_5_devuelve_V()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(5);

        $this->assertEquals("V", $result);
    }

    /**
     * @test
     */
    public function si_es_10_devuelve_X()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(10);

        $this->assertEquals("X", $result);
    }



}