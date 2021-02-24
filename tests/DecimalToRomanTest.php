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

        $result = $DecimalToRoman->devuelveI(1);

        $this->assertEquals("I", $result);
    }

}