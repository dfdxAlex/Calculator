<?php
namespace tokenization;

class MultiplyToSumReplacer
{
    public static function multiplyToSumReplacer(array $tokenArray)
    {
        $timeArray = $tokenArray;
        foreach($timeArray as $key=>$val) {
            if ($val == '*' || $val == '/') {
                if ($val == '*')
                    $timeArray[$key+1] = $timeArray[$key+1] * $timeArray[$key-1];
                
                if ($val == '/')
                    $timeArray[$key+1] = $timeArray[$key-1] / $timeArray[$key+1];
                
                $timeArray[$key-1] = 0;
                $timeArray[$key] = '+';
                
                if ($key>1 && $timeArray[$key-2] == '-') {
                    $timeArray[$key] = '-';
                }
            }
        }
        return $timeArray;
    }
}
