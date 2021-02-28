<?php


namespace Deg540\PHPTestingBoilerplate;


class DecimalToRoman
{

    private function siguiente_mas_pequeño_en_romano(int $valorUsuario)
    {
        if ($valorUsuario == 1 || ($valorUsuario > 1 && $valorUsuario < 5)) {
            return "I";
        }
        if ($valorUsuario == 5 || ($valorUsuario > 5 && $valorUsuario < 10)) {
            return "V";
        }
        if ($valorUsuario == 10 || ($valorUsuario > 10 && $valorUsuario < 50)) {
            return "X";
        }
        if ($valorUsuario == 50 || ($valorUsuario > 50 && $valorUsuario < 100)) {
            return "L";
        }
        if ($valorUsuario == 100 || ($valorUsuario > 100 && $valorUsuario < 500)) {
            return "C";
        }
        if ($valorUsuario == 500 || ($valorUsuario > 500 && $valorUsuario < 1000)) {
            return "D";
        }
        if ($valorUsuario == 1000 || $valorUsuario > 1000) {
            return "M";
        }
    }

    private function siguiente_mas_pequeño(int $valorUsuario)
    {
        if ($valorUsuario == 1 || ($valorUsuario > 1 && $valorUsuario < 6)) {
            return 1;
        }
        if ($valorUsuario > 5 && $valorUsuario < 11) {
            return 5;
        }
        if ($valorUsuario > 10 && $valorUsuario < 51) {
            return 10;
        }
        if ($valorUsuario > 50 && $valorUsuario < 101) {
            return 50;
        }
        if ($valorUsuario > 100 && $valorUsuario < 501) {
            return 100;
        }
        if ($valorUsuario > 500 && $valorUsuario < 1001) {
            return 500;
        }
        if ($valorUsuario > 1000) {
            return 1000;
        }
    }

    //Añadir que cuando ya es 0 acabe.
    private function restar_siguiente_mas_pequeño_al_actual(int $valorUsuario)
    {
        if ($valorUsuario < 1) {
            return 0;
        }
        if ($valorUsuario == 1 || ($valorUsuario > 1 && $valorUsuario < 5)) {
            return $valorUsuario - 1;
        }
        if ($valorUsuario == 5 || ($valorUsuario > 5 && $valorUsuario < 10)) {
            return $valorUsuario - 5;
        }
        if ($valorUsuario == 10 || ($valorUsuario > 10 && $valorUsuario < 50)) {
            return $valorUsuario - 10;
        }
        if ($valorUsuario == 50 || ($valorUsuario > 50 && $valorUsuario < 100)) {
            return $valorUsuario - 50;
        }
        if ($valorUsuario == 100 || ($valorUsuario > 100 && $valorUsuario < 500)) {
            return $valorUsuario - 100;
        }
        if ($valorUsuario == 500 || ($valorUsuario > 500 && $valorUsuario < 1000)) {
            return $valorUsuario - 500;
        }
        if ($valorUsuario == 1000 || $valorUsuario > 1000) {
            return $valorUsuario - 1000;
        }
    }

    private function tipoSumar(int $int)
    {
        $cadena = "";
        if($int<10){
            while ($int > 0) {
                $cadena = $cadena . $this->siguiente_mas_pequeño_en_romano($int);
                $int = $this->restar_siguiente_mas_pequeño_al_actual($int);
            }
        } else{
            $numeros = array();
            while ($int != 0) {
                $numeros[] = $int % 10;
                $int = intval($int / 10); //Si dividimos 1234 / 10 nos da 123.4, pero queremos que no haya decimales. intval lo que hace es quitarle la parte decimal.
            }
            //$numeros = array_reverse($numeros);
            for($i=0;$i<sizeof($numeros);$i++){
                $cadena = $this->convierteNumero(pow(10,$i) *  $numeros[$i]) . $cadena;
            }
        }
        return $cadena;
    }


    //Añadir lo de separar los numeros si son mayores que 10 en este metodo y quitarlo de metodo 2, asi no fallarian numeros como el 129
    public function convierteNumero(int $int)
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
            if($int<50){
                for($j=0;$j<$int/10;$j++){
                    $cadena=$cadena . "X";
                }
            }
            if($int>50 && $int<100){
                $cadena="L";
                $int = $int -50;
                for($j=0;$j<$int/10;$j++){
                    $cadena=$cadena . "X";
                }
            }
            if($int>100){
                $cadena="C";
                $int = $int -100;
                $cadena = $cadena . $this->convierteNumero($int);
            }
            return $cadena;
        }else {
            $original = $int;
            $sig = $this->siguiente_mas_pequeño($int);
            //al sumar 1 al principio es como poner <=, si da 8, ponemos (<9)=(<=8)
            if ($original < (1 + $sig + (3 * $this->siguiente_mas_pequeño($sig)))) {
                return $this->tipoSumar($original);
            } else {
                return $this->tipoRestar($original);
            }
        }
    }

    private function separa_numero(int $int)
    {
        $numeros = array();
        while ($int != 0) {
            $numeros[] = $int % 10;
            $int = intval($int / 10); //Si dividimos 1234 / 10 nos da 123.4, pero queremos que no haya decimales. intval lo que hace es quitarle la parte decimal.
        }
        //$numeros = array_reverse($numeros);
        return $numeros;
    }

    private function tipoRestar(int $int)
    {
        $cadena = "";
        $numeros = $this->separa_numero($int);
        //$numeros = array_reverse($numeros);
        for($i=0;$i<sizeof($numeros);$i++){
            $cadena = $this->convierteNumero(pow(10,$i) *  $numeros[$i]) . $cadena;
        }
        return $cadena;
    }

    public function comprobarTodos(){
        $numeros=[];
        $cadena = "";
        for($i=1;$i<151;$i++){
            $numeros[$i]=$i;
        }
        for($i=1;$i<151;$i++){
            $cadena = $cadena . " " . $this->convierteNumero($numeros[$i]);
            echo "Para el numero " . $i . ", el valor romano es " . $this->convierteNumero($numeros[$i]) . "\n";
        }
        return $cadena;
    }

}