<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$calc = new Calculator();

echo "5 + 3 = " . $calc->add(5, 3) . "\n";
echo "5 - 3 = " . $calc->subtract(5, 3) . "\n";
echo "5 * 3 = " . $calc->multiply(5, 3) . "\n";
echo "5 / 2 = " . $calc->divide(5, 2) . "\n";
