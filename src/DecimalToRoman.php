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

    }
}