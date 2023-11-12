<?php
include "../src/autoload.php";

use interpreter\TokenNumber;
use interpreter\TokenPlus;
use interpreter\TokenMinus;


// Правило 1: Все знаки и операции отделяются пробелом

class TokenArray
{
    private $str;
    private $tokenArray = [];
    private $tokenArrayObj = [];
    private $rez;

    public function __construct($str)
    {
        $this->str = $str;
        $this->tokenArray = $this->returnArrayToken();
        $this->returnArrayTokenObj();
    }

    public function getRez()
    {
        return $this->rez;
    }

    function returnArrayToken() 
    {
        return explode(" ", $this->str);
    }

    function returnArrayTokenObj()
    {
        $tokenRez = new TokenNumber((int) $this->tokenArray[0]);
        foreach($this->tokenArray as $key=>$val) {
            if ($val == '+') {
                $token2 = new TokenNumber((int) $this->tokenArray[$key+1]);
                $rezObj = new TokenPlus([$tokenRez, $token2]);
                $tokenRez = new TokenNumber($rezObj->interpret());
            }
            if ($val == '-') {
                $token2 = new TokenNumber((int) $this->tokenArray[$key+1]);
                $rezObj = new TokenMinus([$tokenRez, $token2]);
                $tokenRez = new TokenNumber($rezObj->interpret());
            }
        }
        $this->rez = $tokenRez->interpret();
    }
}

$returnTocken = new TokenArray("10 + 4 - 7 + 45 - 34 + 2 - 6");
echo $returnTocken->getRez();


