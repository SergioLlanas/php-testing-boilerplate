<?php


namespace Deg540\PHPTestingBoilerplate;


class RomanToDecimal
{
    public function casos_base(string $numeroRomano)
    {
        if($numeroRomano == "I"){
            return 1;
        }
        if($numeroRomano == "IV"){
            return 4;
        }
        if($numeroRomano == "V"){
            return 5;
        }
        if($numeroRomano == "IX"){
            return 9;
        }if($numeroRomano == "X"){
        return 10;
        }
        if($numeroRomano == "XL"){
            return 40;
        }
        if($numeroRomano == "L"){
            return 50;
        }
        if($numeroRomano == "XC"){
            return 90;
        }
        if($numeroRomano == "C"){
            return 100;
        }if($numeroRomano == "D"){
        return 500;
        }
        if($numeroRomano == "M"){
            return 1000;
        }
    }

    public function tipoSumar(string $numeroRomano)
    {
        $total = 0;
        $numSeparado = str_split($numeroRomano);
        for ($i=count($numSeparado);$i>0;$i--){
            $total = $total + $this->casos_base($numSeparado[$i-1]);
        }
        return $total;
    }
}