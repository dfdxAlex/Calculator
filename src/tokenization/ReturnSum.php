<?php
namespace tokenization;

use \interpreter\TokenNumber;
use \interpreter\TokenPlus;
use \interpreter\TokenMinus;

class ReturnSum
{
static public function returnSum($tokenArray)
    {
        $tokenRez = new TokenNumber($tokenArray[0]);
        foreach($tokenArray as $key=>$val) {
            if ($val == '+') {
                $token2 = new TokenNumber($tokenArray[$key+1]);
                $rezObj = new TokenPlus([$tokenRez, $token2]);
                $tokenRez = new TokenNumber($rezObj->interpret());
            }
            if ($val == '-') {
                $token2 = new TokenNumber($tokenArray[$key+1]);
                $rezObj = new TokenMinus([$tokenRez, $token2]);
                $tokenRez = new TokenNumber($rezObj->interpret());
            }
        }
        return $tokenRez->interpret();
    }

}
