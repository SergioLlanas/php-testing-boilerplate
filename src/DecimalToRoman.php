<?php


namespace Deg540\PHPTestingBoilerplate;


class DecimalToRoman
{

    public function devuelveRomano(int $valor_a_comprobar)
    {
        if($valor_a_comprobar == 1){
            return "I";
        }
        if($valor_a_comprobar == 5){
            return "V";
        }
        if($valor_a_comprobar == 10){
            return "X";
        }
        if($valor_a_comprobar == 50){
            return "L";
        }
        if($valor_a_comprobar == 100){
            return "C";
        }
        if($valor_a_comprobar == 500){
            return "D";
        }



    }
}