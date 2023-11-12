<?php
namespace interpreter;

class TokenMultiply implements Interpret
{
  private $val;
  public function __construct(array $array = [])
  {
      $this->val = $array[0]->interpret() * $array[1]->interpret();
  }
  public function interpret()
  {
      return $this->val;
  }
}
