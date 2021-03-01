<?php


namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\DecimalToRoman;
use PHPUnit\Framework\TestCase;

class DecimalToRomanTest extends TestCase
{
    /**
     * @test
     */
    public function devuelve_el_romano_correcto()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->convierteNumero(123);

        $this->assertEquals("CXXIII", $result);
    }

    /**
     * @test
     */
    public function se_ven_todos()
    {
        $DecimalToRoman = new DecimalToRoman();

        $result = $DecimalToRoman->comprobarTodos();

        $this->assertEquals(" I II III IV V VI VII VIII IX X XI XII XIII XIV XV XVI XVII XVIII XIX XX XXI XXII XXIII XXIV XXV XXVI XXVII XXVIII XXIX XXX XXXI XXXII XXXIII XXXIV XXXV XXXVI XXXVII XXXVIII XXXIX XL XLI XLII XLIII XLIV XLV XLVI XLVII XLVIII XLIX L LI LII LIII LIV LV LVI LVII LVIII LIX LX LXI LXII LXIII LXIV LXV LXVI LXVII LXVIII LXIX LXX LXXI LXXII LXXIII LXXIV LXXV LXXVI LXXVII LXXVIII LXXIX LXXX LXXXI LXXXII LXXXIII LXXXIV LXXXV LXXXVI LXXXVII LXXXVIII LXXXIX XC XCI XCII XCIII XCIV XCV XCVI XCVII XCVIII XCIX C CI CII CIII CIV CV CVI CVII CVIII CIX CX CXI CXII CXIII CXIV CXV CXVI CXVII CXVIII CXIX CXX CXXI CXXII CXXIII CXXIV CXXV CXXVI CXXVII CXXVIII CXXIX CXXX CXXXI CXXXII CXXXIII CXXXIV CXXXV CXXXVI CXXXVII CXXXVIII CXXXIX CXL CXLI CXLII CXLIII CXLIV CXLV CXLVI CXLVII CXLVIII CXLIX CL", $result);
    }

}