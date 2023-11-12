<?php
namespace tokenization;

// Правило 1: Все знаки и операции отделяются пробелом

class TokenArray
{
    private $rez;

    public function __construct($str)
    {
        //Tokenization
        //токенизация
        $tokenArray = Tokenizator::returnArrayToken($str);
        
        // addition operation
        //операция сложения
        $this->rez = ReturnSum::returnSum($tokenArray);
    }

    public function getRez()
    {
        return $this->rez;
    }
}
