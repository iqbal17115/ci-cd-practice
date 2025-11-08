<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$calc = new Calculator();

try {
    if ($calc->add(2,3) !== 5) throw new Exception("Add test failed");
    if ($calc->subtract(5,2) !== 3) throw new Exception("Subtract test failed");
    if ($calc->multiply(3,4) !== 12) throw new Exception("Multiply test failed");
    if ($calc->divide(10,2) !== 5) throw new Exception("Divide test failed");

    echo "All tests passed ✅\n";
    exit(0);

} catch (Exception $e) {
    echo $e->getMessage() . " ❌\n";
    exit(1);
} catch (Throwable $t) {
    echo $t->getMessage() . " ❌\n";
    exit(1);
}
