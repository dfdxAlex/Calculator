<?php
include "../src/autoload.php";

use tokenization\TokenArray;

echo '<h2>Interpreter design pattern used</h2>';
echo '<p>Leson: 2 + 45 - 13 * 56 - 88 / 5 + 2</p>';
echo '<p>There must be a space between numbers and characters</p>';

echo '<form>';
echo '<input type="text" name="calc" placeholder="2 + 2">';
echo '<input type="submit" value="calculate">';
echo '</form>';

if (isset($_GET['calc'])) {
    $returnTocken = new TokenArray($_GET['calc']);
    echo $returnTocken->getRez();
}


