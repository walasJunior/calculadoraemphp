<?php

namespace APP\model;

class Calculadora
{
    public static function somar (int $a, int $b): int 
    {
        return $a + $b;
    }
    public static function multiplicar (int $a, int $b): int 
    {
        return $a * $b;
    }
    public static function subtrair (int $a, int $b): int 
    {
        return $a - $b;
    }
    public static function dividir (int $a, int $b): int 
    {
        if ($b == 0){
            throw new \InvalidArgumentException ('division by zero');
            
        }
        return $a / $b;
    }


}