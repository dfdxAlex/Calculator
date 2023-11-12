<?php
include "../src/autoload.php";

use tokenization\TokenArray;

$returnTocken = new TokenArray("5 + 5 + 5 - 10");
echo $returnTocken->getRez();


