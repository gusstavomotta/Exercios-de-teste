<?php

use PhpParser\Node\Expr\AssignOp\Concat;

class StringManipulator
{
    public function capitalizeString(string $texto)
    {

        if ($texto == "") {
            return "";
        }
        return $texto;
    }
    public function concatenateString(string $texto1, string $texto2)
    {
        $espacos1 = substr_count($texto1, ' ');
        $espacos2 = substr_count($texto2, ' ');

        if ($espacos1 == 0 && $espacos2 == 0) {
            $concatenada = trim($this->capitalizeString($texto1) . $this->capitalizeString($texto2));
            return $concatenada;
        }
        $concatenada = trim($this->capitalizeString($texto1) . " " . $this->capitalizeString($texto2));
        return $concatenada;
    }

    public function countVowels(string $texto)
    {
        preg_match_all('/[aeiou]/i', $texto, $vogais);
        return count($vogais[0]);
    }
}