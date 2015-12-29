# Simplest neural network

The simplest neural network from the book: **The Nature of Code** in PHP

This project compute if a given point is below or above the function: `y = 2x + 3` using a neural network with a single
neuron (supervised learning mode).

```php
require __DIR__ . '/vendor/autoload.php';

$trainer = new P\Trainer();

$x = rand(-1, 1);
$y = rand(-1, 1);
$p = new P\Perceptron($x, $y);

$trainer->train($p);

echo "BELOW THE LINE -> " . $p->feedForward(2, 2) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(9, 9) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-9, 0) . PHP_EOL;
```
