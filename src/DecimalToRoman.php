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

    public function restar(int $valor_usuario)
    {
        if($valor_usuario == 1 || ($valor_usuario>1 && $valor_usuario<5)){
            return $valor_usuario-1;
        }
        if($valor_usuario == 5 || ($valor_usuario>5 && $valor_usuario<10)){
            return $valor_usuario-5;
        }
        if($valor_usuario == 10 || ($valor_usuario>10 && $valor_usuario<50)){
            return $valor_usuario-10;
        }
        if($valor_usuario == 50 || ($valor_usuario>50 && $valor_usuario<100)){
            return $valor_usuario-50;
        }
        if($valor_usuario == 100 || ($valor_usuario>100 && $valor_usuario<500)){
            return $valor_usuario-100;
        }
        if($valor_usuario == 500 || ($valor_usuario>500 && $valor_usuario<1000)){
            return $valor_usuario-500;
        }
        if($valor_usuario == 1000 || $valor_usuario>1000){
            return $valor_usuario-1000;
        }
    }

    /*Para decidir si uso esta forma o la otra utilizo:
    - cogo el siguiente mas pequeño, si es mayor que ese mas tres unidades del siguiente mas pequeño metodo dos, sino metodo 1.
    -ejemplo:
        Si es el 9, el mas siguiente es 5, como es mayor que 8 (5 mas 3 unidades de 1 que es el siguiente mas peqeño), uso el metodo dos.
        Si es el 7, cogo el 5 como es menor que 8, metodo 1, por tanto escribo el 5, resto 7-5, repito el proceso, ahora tengo un 2, tengo el 2,
        el mas pequeño es el 1, metodo 1, imprimo el q, lo resto 2-1=1, repito otra vez y finalmente habre imprimido VII.
    */

}