<?php


namespace Deg540\PHPTestingBoilerplate;


class RomanToDecimal
{
    public function elige(string $numeroRomano)
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
        if($numeroRomano == "L"){
            return 50;
        }
        if($numeroRomano == "C"){
            return 100;
        }if($numeroRomano == "D"){
        return 500;
        }
        if($numeroRomano == "M"){
            return 1000;
        }
        $total = 0;
        $numSeparado = str_split($numeroRomano);
        for ($i=0;$i<count($numSeparado);$i++) {
            $numSeparado[$i] = $this->elige($numSeparado[$i]);
        }
        for ($i=count($numSeparado);$i>0;$i--){
            if($numSeparado[$i-2]<$numSeparado[$i-1]){
                $total = $total + $numSeparado[$i-1] - $numSeparado[$i-2];
                echo "total = total + " . $numSeparado[$i-1] . " - " . $numSeparado[$i-2] . " de tipo resta\n";
                $i--;
            } else{
                $total = $total + $numSeparado[$i-1];
                echo "total = total + " . $numSeparado[$i-1] . " de tipo suman\n";
            }
        }
        return $total;
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
    //Juntar estas dos y luego hacer que diferencie y hara falta que sea recursivo
    public function tipoRestar(string $numeroRomano)
    {
        $total = 0;
        $numSeparado = str_split($numeroRomano);
        for ($i=0;$i<count($numSeparado);$i++) {
            $numSeparado[$i] = $this->elige($numSeparado[$i]);
        }
        for ($i=0;$i<count($numSeparado);$i++){
            if($numSeparado[$i]<$numSeparado[$i+1]){
                $total = $total + $numSeparado[$i+1] - $numSeparado[$i];
            }
        }
        return $total;
    }

}