<?php


namespace Deg540\PHPTestingBoilerplate;


class DecimalToRoman
{

    public function devuelveRomano(int $valor_a_comprobar)
    {
        if($valor_a_comprobar == 1 || ($valor_a_comprobar>1 && $valor_a_comprobar<5)){
            return "I";
        }
        if($valor_a_comprobar == 5 || ($valor_a_comprobar>5 && $valor_a_comprobar<10)){
            return "V";
        }
        if($valor_a_comprobar == 10 || ($valor_a_comprobar>10 && $valor_a_comprobar<50)){
            return "X";
        }
        if($valor_a_comprobar == 50 || ($valor_a_comprobar>50 && $valor_a_comprobar<100)){
            return "L";
        }
        if($valor_a_comprobar == 100 || ($valor_a_comprobar>100 && $valor_a_comprobar<500)){
            return "C";
        }
        if($valor_a_comprobar == 500 || ($valor_a_comprobar>500 && $valor_a_comprobar<1000)){
            return "D";
        }
        if($valor_a_comprobar == 1000 || $valor_a_comprobar>1000){
            return "M";
        }



    }


}