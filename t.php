<?php
require __DIR__ . '/vendor/autoload.php';

$x = rand(-1, 1);
$y = rand(-1, 1);
$p = new P\Perceptron($x, $y);

$trainer = new P\Trainer();
$trainer->train($p);

echo "BELOW THE LINE -> " . $p->feedForward(2, 2) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(9, 9) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-9, 0) . PHP_EOL;
