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

    /**
     * @test
     */
    public function si_es_50_devuelve_L()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(50);

        $this->assertEquals("L", $result);
    }

    /**
     * @test
     */
    public function si_es_100_devuelve_C()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(100);

        $this->assertEquals("C", $result);
    }
    /**
     * @test
     */
    public function si_es_500_devuelve_D()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(500);

        $this->assertEquals("D", $result);
    }

    /**
     * @test
     */
    public function si_es_1000_devuelve_M()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(1000);

        $this->assertEquals("M", $result);
    }


    /**
     * @test
     */
    public function encontrar_numero_max_con_romano_y_devuelve_el_romano()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(2300);

        $this->assertEquals("M", $result);
    }

    /**
     * @test
     */
    public function si_numero_con_romano_o_mas_pequeño_devolver_numero_con_romano()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->devuelveRomano(25);

        $this->assertEquals("X", $result);
    }

    /**
     * @test
     */
    public function resta_siguiente_MaxMin()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->restar(1500);

        $this->assertEquals(500, $result);
    }


    /**
     * @test
     */
    public function muestra_pertenecientes_metodo_1()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->metodo1(1001);

        $this->assertEquals("MI", $result);
    }

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