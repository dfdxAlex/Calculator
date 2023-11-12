<?php
namespace tokenization;

class Tokenizator
{
    static public function returnArrayToken($str) 
    {
        return explode(" ", $str);
    }
}
