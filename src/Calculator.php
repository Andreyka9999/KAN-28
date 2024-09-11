<?php

namespace App;

class Calculator 
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b) 
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) 
        {
            return "Cannot divide by zero";
        }
        return $a / $b;
    }
}