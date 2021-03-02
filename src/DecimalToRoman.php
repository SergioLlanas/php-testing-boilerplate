<?php


namespace Deg540\PHPTestingBoilerplate;


class DecimalToRoman
{
//Valores de las variables con lo que me pasan (Ej:NumeroRomano)
//Primero metodos publicos y luego los privados

    public function convierteNumero(int $numeroDecimal){
        if($this->es_caso_base($numeroDecimal)){
            return $this->calcula_caso_base($numeroDecimal);
        }else  if($numeroDecimal%10 == 0){
            return $this->calcula_multiplo_de_diez($numeroDecimal);
        }else {
            $sig = $this->siguiente_mas_pequeño($numeroDecimal);
            //al sumar 1 al principio es como poner <=, si da 8, ponemos (<9)=(<=8)
            if ($numeroDecimal < (1 + $sig + (3 * $this->siguiente_mas_pequeño($sig)))) {
                return $this->calcula_tipo_suma($numeroDecimal);
            } else {
                return $this->calcula_tipo_resta($numeroDecimal);
            }
        }
    }
    private function es_caso_base(int $numeroDecimal){
        if(($numeroDecimal == 1) || ($numeroDecimal == 4) || ($numeroDecimal == 5) || ($numeroDecimal == 9)  || ($numeroDecimal == 10) || ($numeroDecimal == 40)  || ($numeroDecimal == 50) || ($numeroDecimal == 90) || ($numeroDecimal == 100)  || ($numeroDecimal == 500) || ($numeroDecimal == 1000)){
            return true;
        } else {
            return false;
        }
    }

    private function calcula_caso_base(int $numeroDecimal){
        //Usar arrays clave valor
        $casosBase = array(
            1 => "I",
            4 => "IV",
            5 => "V",
            9 => "IX",
            10 => "X",
            40 => "XL",
            50 => "X",
            90 => "XC",
            100 => "C",
            500 => "D",
            1000 => "M",
        );
        if ($numeroDecimal == 1) {
            return "I";
        } else if ($numeroDecimal == 4) {
            return "IV";
        }else if ($numeroDecimal == 9) {
            return "IX";
        }else if ($numeroDecimal == 5) {
            return "V";
        } else if ($numeroDecimal == 10) {
            return "X";
        }else if ($numeroDecimal == 40) {
            return "XL";
        } else if ($numeroDecimal == 50) {
            return "L";
        } else if ($numeroDecimal == 90) {
            return "XC";
        }else if ($numeroDecimal == 100) {
            return "C";
        } else if ($numeroDecimal == 500) {
            return "D";
        } else if ($numeroDecimal == 1000) {
            return "M";
        }
    }

    private function calcula_multiplo_de_diez(int $numeroDecimal){
        $cadena = "";
        if($numeroDecimal<50){
            for($j=0; $j<$numeroDecimal/10; $j++){
                $cadena=$cadena . "X";
            }
        }
        if($numeroDecimal>50 && $numeroDecimal<100){
            $cadena="L";
            $numeroDecimal = $numeroDecimal -50;
            for($j=0; $j<$numeroDecimal/10; $j++){
                $cadena=$cadena . "X";
            }
        }
        if($numeroDecimal>100){
            $cadena="C";
            $numeroDecimal = $numeroDecimal -100;
            $cadena = $cadena . $this->convierteNumero($numeroDecimal);
        }
        return $cadena;
    }

    private function calcula_tipo_suma(int $numeroDecimal)
    {
        $cadena = "";
        if($numeroDecimal<10){
            while ($numeroDecimal > 0) {
                $cadena = $cadena . $this->siguiente_mas_pequeño_en_romano($numeroDecimal);
                $numeroDecimal = $this->restar_siguiente_mas_pequeño_al_actual($numeroDecimal);
            }
        } else{
            $numeros = array();
            while ($numeroDecimal != 0) {
                $numeros[] = $numeroDecimal % 10;
                $numeroDecimal = intval($numeroDecimal / 10); //Si dividimos 1234 / 10 nos da 123.4, pero queremos que no haya decimales. intval lo que hace es quitarle la parte decimal.
            }
            //$numeros = array_reverse($numeros);
            for($i=0;$i<sizeof($numeros);$i++){
                $cadena = $this->convierteNumero(pow(10,$i) *  $numeros[$i]) . $cadena;
            }
        }
        return $cadena;
    }

    private function calcula_tipo_resta(int $int)
    {
        $cadena = "";
        $numeros = $this->separa_numero($int);
        //$numeros = array_reverse($numeros);
        for($i=0;$i<sizeof($numeros);$i++){
            $cadena = $this->convierteNumero(pow(10,$i) *  $numeros[$i]) . $cadena;
        }
        return $cadena;
    }

    private function siguiente_mas_pequeño_en_romano(int $numeroDecimal)
    {
        if ($numeroDecimal == 1 || ($numeroDecimal > 1 && $numeroDecimal < 5)) {
            return "I";
        }
        if ($numeroDecimal == 5 || ($numeroDecimal > 5 && $numeroDecimal < 10)) {
            return "V";
        }
        if ($numeroDecimal == 10 || ($numeroDecimal > 10 && $numeroDecimal < 50)) {
            return "X";
        }
        if ($numeroDecimal == 50 || ($numeroDecimal > 50 && $numeroDecimal < 100)) {
            return "L";
        }
        if ($numeroDecimal == 100 || ($numeroDecimal > 100 && $numeroDecimal < 500)) {
            return "C";
        }
        if ($numeroDecimal == 500 || ($numeroDecimal > 500 && $numeroDecimal < 1000)) {
            return "D";
        }
        if ($numeroDecimal == 1000 || $numeroDecimal > 1000) {
            return "M";
        }
    }

    private function siguiente_mas_pequeño(int $numeroDecimal)
    {
        if ($numeroDecimal == 1 || ($numeroDecimal > 1 && $numeroDecimal < 6)) {
            return 1;
        }
        if ($numeroDecimal > 5 && $numeroDecimal < 11) {
            return 5;
        }
        if ($numeroDecimal > 10 && $numeroDecimal < 51) {
            return 10;
        }
        if ($numeroDecimal > 50 && $numeroDecimal < 101) {
            return 50;
        }
        if ($numeroDecimal > 100 && $numeroDecimal < 501) {
            return 100;
        }
        if ($numeroDecimal > 500 && $numeroDecimal < 1001) {
            return 500;
        }
        if ($numeroDecimal > 1000) {
            return 1000;
        }
    }

    private function restar_siguiente_mas_pequeño_al_actual(int $numeroDecimal)
    {
        if ($numeroDecimal < 1) {
            return 0;
        }
        if ($numeroDecimal == 1 || ($numeroDecimal > 1 && $numeroDecimal < 5)) {
            return $numeroDecimal - 1;
        }
        if ($numeroDecimal == 5 || ($numeroDecimal > 5 && $numeroDecimal < 10)) {
            return $numeroDecimal - 5;
        }
        if ($numeroDecimal == 10 || ($numeroDecimal > 10 && $numeroDecimal < 50)) {
            return $numeroDecimal - 10;
        }
        if ($numeroDecimal == 50 || ($numeroDecimal > 50 && $numeroDecimal < 100)) {
            return $numeroDecimal - 50;
        }
        if ($numeroDecimal == 100 || ($numeroDecimal > 100 && $numeroDecimal < 500)) {
            return $numeroDecimal - 100;
        }
        if ($numeroDecimal == 500 || ($numeroDecimal > 500 && $numeroDecimal < 1000)) {
            return $numeroDecimal - 500;
        }
        if ($numeroDecimal == 1000 || $numeroDecimal > 1000) {
            return $numeroDecimal - 1000;
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