<?php


namespace Deg540\PHPTestingBoilerplate;


class DecimalToRoman
{

    private function siguiente_mas_pequeño_romano(int $valor_usuario)
    {
        if ($valor_usuario == 1 || ($valor_usuario > 1 && $valor_usuario < 5)) {
            return "I";
        }
        if ($valor_usuario == 5 || ($valor_usuario > 5 && $valor_usuario < 10)) {
            return "V";
        }
        if ($valor_usuario == 10 || ($valor_usuario > 10 && $valor_usuario < 50)) {
            return "X";
        }
        if ($valor_usuario == 50 || ($valor_usuario > 50 && $valor_usuario < 100)) {
            return "L";
        }
        if ($valor_usuario == 100 || ($valor_usuario > 100 && $valor_usuario < 500)) {
            return "C";
        }
        if ($valor_usuario == 500 || ($valor_usuario > 500 && $valor_usuario < 1000)) {
            return "D";
        }
        if ($valor_usuario == 1000 || $valor_usuario > 1000) {
            return "M";
        }
    }

    private function siguiente_mas_pequeño(int $valor_usuario)
    {
        if ($valor_usuario == 1 || ($valor_usuario > 1 && $valor_usuario < 6)) {
            return 1;
        }
        if ($valor_usuario > 5 && $valor_usuario < 11) {
            return 5;
        }
        if ($valor_usuario > 10 && $valor_usuario < 51) {
            return 10;
        }
        if ($valor_usuario > 50 && $valor_usuario < 101) {
            return 50;
        }
        if ($valor_usuario > 100 && $valor_usuario < 501) {
            return 100;
        }
        if ($valor_usuario > 500 && $valor_usuario < 1001) {
            return 500;
        }
        if ($valor_usuario > 1000) {
            return 1000;
        }
    }

    //Añadir que cuando ya es 0 acabe.
    private function restar(int $valor_usuario)
    {
        if ($valor_usuario < 1) {
            return 0;
        }
        if ($valor_usuario == 1 || ($valor_usuario > 1 && $valor_usuario < 5)) {
            return $valor_usuario - 1;
        }
        if ($valor_usuario == 5 || ($valor_usuario > 5 && $valor_usuario < 10)) {
            return $valor_usuario - 5;
        }
        if ($valor_usuario == 10 || ($valor_usuario > 10 && $valor_usuario < 50)) {
            return $valor_usuario - 10;
        }
        if ($valor_usuario == 50 || ($valor_usuario > 50 && $valor_usuario < 100)) {
            return $valor_usuario - 50;
        }
        if ($valor_usuario == 100 || ($valor_usuario > 100 && $valor_usuario < 500)) {
            return $valor_usuario - 100;
        }
        if ($valor_usuario == 500 || ($valor_usuario > 500 && $valor_usuario < 1000)) {
            return $valor_usuario - 500;
        }
        if ($valor_usuario == 1000 || $valor_usuario > 1000) {
            return $valor_usuario - 1000;
        }
    }

    /*Para decidir si uso esta forma o la otra utilizo:
    - cogo el siguiente mas pequeño, si es mayor que ese mas tres unidades del siguiente mas pequeño metodo dos, sino metodo 1.
    -ejemplo:
        Si es el 9, el mas siguiente es 5, como es mayor que 8 (5 mas 3 unidades de 1 que es el siguiente mas peqeño), uso el metodo dos.
        Si es el 7, cogo el 5 como es menor que 8, metodo 1, por tanto escribo el 5, resto 7-5, repito el proceso, ahora tengo un 2, tengo el 2,
        el mas pequeño es el 1, metodo 1, imprimo el q, lo resto 2-1=1, repito otra vez y finalmente habre imprimido VII.
    */
    private function metodo1(int $int)
    {
        $cadena = "";
        if($int<10){
            while ($int > 0) {
                $cadena = $cadena . $this->siguiente_mas_pequeño_romano($int);
                $int = $this->restar($int);
            }
        } else{
            $numeros = array();
            while ($int != 0) {
                $numeros[] = $int % 10;
                $int = intval($int / 10); //Si dividimos 1234 / 10 nos da 123.4, pero queremos que no haya decimales. intval lo que hace es quitarle la parte decimal.
            }
            //$numeros = array_reverse($numeros);
            for($i=0;$i<sizeof($numeros);$i++){
                $cadena = $this->elige(pow(10,$i) *  $numeros[$i]) . $cadena;
            }
        }
        return $cadena;
    }


    //Añadir lo de separar los numeros si son mayores que 10 en este metodo y quitarlo de metodo 2, asi no fallarian numeros como el 129
    public function elige(int $int)
    {
        if ($int == 1) {
            return "I";
        } else if ($int == 4) {
            return "IV";
        }else if ($int == 9) {
            return "IX";
        }else if ($int == 5) {
            return "V";
        } else if ($int == 10) {
            return "X";
        }else if ($int == 40) {
            return "XL";
        } else if ($int == 50) {
            return "L";
        } else if ($int == 90) {
            return "XC";
        }else if ($int == 100) {
            return "C";
        } else if ($int == 500) {
            return "D";
        } else if ($int == 1000) {
            return "M";
        }else  if($int%10 == 0){
            $cadena = "";
            //De esta forma se hacen los multiplos de 10
            if($int>50 && $int<100){
                $cadena="L";
                $int = $int -50;
            }
            for($j=0;$j<$int/10;$j++){
                $cadena=$cadena . "X";
            }
            if($int>100){
                $cadena="C";
                $int = $int -100;
                $cadena = $cadena . $this->elige($int);
            }


            return $cadena;
        }else {
            $original = $int;
            $sig = $this->siguiente_mas_pequeño($int);
            //al sumar 1 al principio es como poner <=, si da 8, ponemos (<9)=(<=8)
            if ($original < (1 + $sig + (3 * $this->siguiente_mas_pequeño($sig)))) {
                return $this->metodo1($original);
            } else {
                return $this->metodo2($original);
            }
        }
    }

    public function separa_numero(int $int)
    {
        $numeros = array();
        while ($int != 0) {
            $numeros[] = $int % 10;
            $int = intval($int / 10); //Si dividimos 1234 / 10 nos da 123.4, pero queremos que no haya decimales. intval lo que hace es quitarle la parte decimal.
        }
        //$numeros = array_reverse($numeros);
        return $numeros;
    }

    public function metodo2(int $int)
    {
        $cadena = "";
        $numeros = $this->separa_numero($int);
        //$numeros = array_reverse($numeros);
        for($i=0;$i<sizeof($numeros);$i++){
            $cadena = $this->elige(pow(10,$i) *  $numeros[$i]) . $cadena;
        }
        return $cadena;
    }


}