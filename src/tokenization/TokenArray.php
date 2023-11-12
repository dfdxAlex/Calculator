<?php
namespace tokenization;

// Правило 1: Все знаки и операции отделяются пробелом

class TokenArray
{
    private $rez;

    public function __construct($str)
    {
        $tokenArray = Tokenizator::returnArrayToken($str);
        $this->rez = ReturnSum::returnSum($tokenArray);
    }

    public function getRez()
    {
        return $this->rez;
    }
}
