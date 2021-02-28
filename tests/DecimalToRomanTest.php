<?php


namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\DecimalToRoman;
use PHPUnit\Framework\TestCase;

class DecimalToRomanTest extends TestCase
{
    /**
     * @test
     */
    public function final_bien()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->elige(160);

        $this->assertEquals("CLX", $result);
    }

}