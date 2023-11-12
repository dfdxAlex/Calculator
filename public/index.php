<?php
include "../src/autoload.php";

use tokenization\TokenArray;

$returnTocken = new TokenArray("2 + 45 - 13 * 56 - 88 / 5 + 2");
echo $returnTocken->getRez();


