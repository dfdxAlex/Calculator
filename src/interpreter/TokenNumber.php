<?php
namespace interpreter;

class TokenNumber implements Interpret
{
    private $val;
    public function __construct($val)
    {
        $this->val = $val;
    }
    public function interpret()
    {
        return $this->val;
    }
}
