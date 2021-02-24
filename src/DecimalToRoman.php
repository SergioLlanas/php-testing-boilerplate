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


    public function siguiente_mas_pequeño_romano(int $valor_usuario)
    {
        if($valor_usuario == 1 || ($valor_usuario>1 && $valor_usuario<5)){
            return "I";
        }
        if($valor_usuario>5 && $valor_usuario<10){
            return "V";
        }
        if($valor_usuario>10 && $valor_usuario<50){
            return "X";
        }
        if($valor_usuario>50 && $valor_usuario<100){
            return "L";
        }
        if($valor_usuario>100 && $valor_usuario<500){
            return "C";
        }
        if($valor_usuario>500 && $valor_usuario<1000){
            return "D";
        }
        if($valor_usuario>1000){
            return "M";
        }
    }

    public function siguiente_mas_pequeño(int $valor_usuario)
    {
        if($valor_usuario == 1 || ($valor_usuario>1 && $valor_usuario<5)){
            return 1;
        }
        if($valor_usuario>5 && $valor_usuario<10){
            return 5;
        }
        if($valor_usuario>10 && $valor_usuario<50){
            return 10;
        }
        if($valor_usuario>50 && $valor_usuario<100){
            return 50;
        }
        if($valor_usuario>100 && $valor_usuario<500){
            return 100;
        }
        if($valor_usuario>500 && $valor_usuario<1000){
            return 500;
        }
        if($valor_usuario>1000){
            return 1000;
        }
    }

    //Añadir que cuando ya es 0 acabe.
    public function restar(int $valor_usuario)
    {
        if($valor_usuario<1){
            return 0;
        }
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
    public function metodo1(int $int)
    {
        $cadena = "";
        while($int>0){
            $cadena = $cadena . $this->siguiente_mas_pequeño_romano($int);
            $int = $this->restar($int);
        }
        return $cadena;
    }

    public function elige(int $int)
    {
        $original = $int;
        $sig = $this->siguiente_mas_pequeño($int);
        //al sumar 1 al principio es como poner <=, si da 8, ponemos (<9)=(<=8)
        if($original<(1+$sig+(3*$this->siguiente_mas_pequeño($sig-1)))){ //Le paso sig-1, porque tal y como esta la funcion declarada el 5 no devuelve
            return $this->metodo1($original);
        } else{
            return "Otro metodo";
        }
    }

}