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
                $i--;
            } else{
                $total = $total + $numSeparado[$i-1];
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

    public function se_ven_todos()
    {
        $numsRom = ["I","II","III","IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII", "XIII", "XIV", "XV", "XVI", "XVII", "XVIII", "XIX", "XX", "XXI", "XXII", "XXIII" ,"XXIV" ,"XXV" ,"XXVI", "XXVII", "XXVIII" ,"XXIX", "XXX" ,"XXXI" ,"XXXII", "XXXIII" ,"XXXIV", "XXXV", "XXXVI" ,"XXXVII", "XXXVIII" ,"XXXIX" ,"XL", "XLI", "XLII" ,"XLIII" ,"XLIV" ,"XLV" ,"XLVI", "XLVII" ,"XLVIII", "XLIX" ,"L" ,"LI", "LII","LIII", "LIV" ,"LV" ,"LVI", "LVII", "LVIII" ,"LIX", "LX", "LXI", "LXII", "LXIII", "LXIV", "LXV", "LXVI", "LXVII", "LXVIII", "LXIX", "LXX", "LXXI", "LXXII", "LXXIII", "LXXIV", "LXXV", "LXXVI", "LXXVII", "LXXVIII", "LXXIX", "LXXX", "LXXXI", "LXXXII", "LXXXIII", "LXXXIV", "LXXXV", "LXXXVI", "LXXXVII", "LXXXVIII", "LXXXIX", "XC", "XCI", "XCII", "XCIII", "XCIV", "XCV", "XCVI", "XCVII", "XCVIII", "XCIX", "C", "CI", "CII", "CIII", "CIV", "CV", "CVI", "CVII", "CVIII" ,"CIX", "CX" ,"CXI", "CXII", "CXIII" ,"CXIV", "CXV" ,"CXVI", "CXVII" ,"CXVIII" ,"CXIX" ,"CXX", "CXXI", "CXXII" ,"CXXIII" ,"CXXIV", "CXXV", "CXXVI", "CXXVII", "CXXVIII", "CXXIX" ,"CXXX", "CXXXI" ,"CXXXII", "CXXXIII", "CXXXIV", "CXXXV", "CXXXVI", "CXXXVII", "CXXXVIII", "CXXXIX", "CXL", "CXLI", "CXLII", "CXLIII", "CXLIV", "CXLV", "CXLVI", "CXLVII", "CXLVIII", "CXLIX", "CL"];
        $numsDec = [];
        for ($i=0;$i<count($numsRom);$i++){
            $numsDec[$i]=$this->elige($numsRom[$i]);
        }
        return $numsDec;
    }

}